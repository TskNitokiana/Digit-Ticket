<?php
namespace App\Controller;

use App\Entity\Event;
use App\Entity\Ticket;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    { 
        $em = $this->getDoctrine()
                   ->getManager();
        $event = $em->getRepository(Event::class)
                   ->findAll();
        $ticket = $em->getRepository(Ticket::class)
                   ->findAll();
        return $this->render('admin/admin.html.twig',['event'=>$event ,'ticket'=>$ticket]);
    }

    /**
     * @Route("/admin/organizer", name="organizer")
     */
    public function organisateur()
    {
        $em = $this->getDoctrine()
                   ->getManager();
        $event = $em->getRepository(Event::class)
                   ->findAll();
        $ticket = $em->getRepository(Ticket::class)
                   ->findAll();
        return $this->render('admin/organizer.html.twig',['event'=>$event ,'ticket'=>$ticket]);
    }
}