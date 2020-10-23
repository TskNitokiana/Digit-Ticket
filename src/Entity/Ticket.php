<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $reference;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Command", inversedBy="ticket")
     */
    private $command;

   

    /**
     * @ORM\Column(type="integer")
     */
    private $events;




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function setReference(int $reference): self
    {
        $this->reference = $reference;

        return $this;
    }


    public function getCommand(): ?Command
    {
        return $this->command;
    }

    public function setCommand(?Command $command): self
    {
        $this->command = $command;

        return $this;
    }


 

    public function getEvents(): ?int
    {
        return $this->events;
    }

    public function setEvents(int $events): self
    {
        $this->events = $events;

        return $this;
    }

}