<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Event;
use App\Entity\Ticket;
use App\Entity\Command;
use App\Form\EventType;
use App\Entity\Category;
use App\Entity\TypeEvent;
use App\Entity\TypePrice;
use App\Form\CommandType;
use App\Repository\UserRepository;
use App\Repository\EventRepository;
use App\Repository\TicketRepository;
use App\Repository\CommandRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EventController extends AbstractController
{   
    /**
     * @Route("/event/new", name="event_event")
     */
    public function new(Request $request, EventRepository $event): Response
    {
        $event = new Event();
       
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
      
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($event);
            $entityManager->flush();
            $quantity = $event->getQuantity();
            $id = $event->getId();
            $rel = intval($id);
            for ($i=0; $i < $quantity; $i++) {                
                $ticket = new Ticket();
                $ref = rand(100000,1000000);
                $ticket->setReference($ref);
                $ticket->setEvents($rel);
                $entityManager->persist($ticket);
                $entityManager->flush();
             }

            return $this->redirectToRoute('admin');
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/", name="homepage")
     */
    public function home() //rendre index view ,contient la liste evenement
    {
        $event = new Event();
        $em = $this->getDoctrine()
                   ->getManager();
        $event = $em->getRepository(Event::class)
                   ->findAll();
        return $this->render('event/homepage.html.twig',[
            'listeEvents' =>  $event ,
        ]);
    }

    /**
     * @Route("/testqr", name="test")
     */
    public function test()
    {
        return $this->render('email/generateQr.html.twig');
    }

    /**
     * @Route("/event/details/{id}", name="event_details")
     */
    public function ShowEvent(EventRepository $repo, $id ,\Swift_Mailer $mailer,EventRepository $eventrepo,UserRepository $user,Request $request,ObjectManager $manager ,CommandRepository $command){
        $event = $repo->find($id);
        $em = $this->getDoctrine()
                   ->getManager();
        $category = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $command = $this->getDoctrine()->getRepository(Command::class)->findAll();
        $tickets = $this->getDoctrine()->getRepository(Ticket::class)->findAll();
        $typeevent = $this->getDoctrine()->getRepository(TypeEvent::class)->findAll();
        $typeprice = $this->getDoctrine()->getRepository(TypePrice::class)->findAll();
                $ticketNonReserver=$em->getRepository(Ticket::class)->findByNull(NULL);
                if($ticketNonReserver){
                    if ($request->request->count() > 0  ) {
                        $user = $user->find(((int)$request->get('user')));                       
                        $nombre = (int)$request->get('nombre');
                        $nombre = (int)$nombre;
                        $title = $request->get('title');
                        if($nombre){
                            for ($i = 0 ; $i < $nombre ; $i++ ){
                                $eventrepo = $repo->find($id);
                                $command = new Command();
                                    $command->setUser($user);
                                    $command->addTicket($ticketNonReserver[$i]);
                                    $manager->persist($command);
                                    $reference = $ticketNonReserver[$i]->getReference();
                                    $message = (new \Swift_Message('Votre Ticket'))
                                    ->setFrom('votre@adresse.fr')
                                    ->setTo($user->getEmail())
                                    ->setBody($this->renderView('email/generateQr.html.twig',['reference'=>$reference,'user'=>$user,'event'=>$eventrepo  ]),'text/html');    
                                    $mailer->send($message);
                                }
                            }else{
                                echo "Pas d' evenement et billet deja reserver";
                                die(); 
                            }
                            $manager->flush();
                            
                    }}else {
                        echo "Il n y a plus de ticket ";
                        die();
                    }
        return $this->render('event/details.html.twig',[
            'events'=>$event,'typeevents'=>$typeevent,'typeprices'=>$typeprice,'categories'=>$category ,'nombres'=>$ticketNonReserver ,'tickets'=>$tickets
        ]);
    }
    
    /**
     * @Route("/event/command/{id}", name="command")
     */
    public function command(\Swift_Mailer $mailer,EventRepository $eventrepo,UserRepository $user,Request $request,ObjectManager $manager ,CommandRepository $command , $id){
        $em = $this->getDoctrine()
                   ->getManager();
       
        $events = $em->getRepository(Event::class)
                       ->find($id);
                       
        $ticketNonReserver=$em->getRepository(Ticket::class)->findByNull(NULL);
        $em = $this->getDoctrine()
                   ->getManager();

        //regeneration de ticket selon le nombre choisis
        //parcours ticket d un evenement
    if($ticketNonReserver){
        if ($request->request->count() > 0  ) {
            $user = $user->find(((int)$request->get('user')));
            $nombre = (int)$request->get('nombre');
            $nombre = (int)$nombre;
            dump($nombre);
            die();
            $title = $request->get('title');
            if ($nombre) {
                for ($i = 0 ;$i < $nombre ;$i ++ ) {
                    $eventrepo = $eventrepo->find($id);
                        $command = new Command();
                        $command->setUser($user);
                        $command->addTicket($ticketNonReserver[$i]);     
                        $reference = $ticketNonReserver[$i]->getReference();
                        $message = (new \Swift_Message('Votre Ticket'))
                              ->setFrom('votre@adresse.fr')
                              ->setTo($user->getEmail())
                              ->setBody($this->renderView('email/generateQr.html.twig',['reference'=>$reference]),'text/html');    
                       $mailer->send($message);
                        }
            }else{
                    echo "Pas d' evenement et billet deja reserver";
                    die(); 
                }
                $manager->persist($command);
                $manager->flush();
        }}else {
            echo "Il n y a plus de ticket ";
            die();
        }

        //ajouter command , et ajouter ticket pas encore utilise
        
        return $this->render('event/command.html.twig',['nombres'=>$ticketNonReserver ,'events'=>$events]);
    }
}