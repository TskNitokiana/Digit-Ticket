<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;

use App\Repository\UserRepository;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(\Swift_Mailer $mailer , Request $request,ObjectManager $manager ,UserPasswordEncoderInterface $encoder )
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class ,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() ){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            
            $user->setPassword($hash);
            
            $user->setActivationToken(md5(uniqid()));

            $dt = $form->getData()->getUserTypes()->getName();
            if ($dt == "CLIENT") {
                $user->setRoles(array('ROLE_ADMIN'));
                $user->setRolesVerif('ROLE_CLIENT');
            }else {
                $user->setRoles(array('ROLE_ADMIN'));
                $user->setRolesVerif('ROLE_ORGANIZER');
            }
            $manager->persist($user);
            $message = (new \Swift_Message('Activation de votre compte'))
                ->setFrom('votre@adresse.fr')
                ->setTo($user->getEmail())
                ->setBody($this->renderView('email/activation.html.twig',['token'=>$user->getActivationToken()]),'text/html');    
        $mailer->send($message);
            $manager->flush();
        }
        
        return $this->render('security/index.html.twig', [
            'form' => $form->createView() ,
        ]);
    }
     /**
     * @Route("/connexion", name="security_login")
     */
    public function login(Request $request,ObjectManager $manager ,UserPasswordEncoderInterface $encoder )
    {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout(Request $request,ObjectManager $manager ,UserPasswordEncoderInterface $encoder )
    {
        return $this->render('security/logout.html.twig');
    }

    /**
     * @Route("/activation/{token}", name="activation")
     */
    public function activation($token , UserRepository $userRepo)
    {
        
        $user = $userRepo->findOneBy(['activationToken'=>$token]);
        if(!$user){
            throw $this->createNotFoundException('Cet utilisateur n existe pas ');
        }
        $user->setActivationToken(null);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        $this->addFlash('message','vous avez bien activé votre compte');
        return $this->redirectToRoute('active');
    }

      /**
     * @Route("/active", name="active")
     */
    public function active()
    {
        return $this->render('email/active.html.twig');
    }

}
