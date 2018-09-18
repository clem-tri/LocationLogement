<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocationRepository")
 */
class Location
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Logement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $logement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dtStLocation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dtEndLocation;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbVoyager;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogement(): ?Logement
    {
        return $this->logement;
    }

    public function setLogement(?Logement $logement): self
    {
        $this->logement = $logement;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getDtStLocation(): ?\DateTimeInterface
    {
        return $this->dtStLocation;
    }

    public function setDtStLocation(\DateTimeInterface $dtStLocation): self
    {
        $this->dtStLocation = $dtStLocation;

        return $this;
    }

    public function getDtEndLocation(): ?\DateTimeInterface
    {
        return $this->dtEndLocation;
    }

    public function setDtEndLocation(\DateTimeInterface $dtEndLocation): self
    {
        $this->dtEndLocation = $dtEndLocation;

        return $this;
    }

    public function getNbVoyager(): ?int
    {
        return $this->nbVoyager;
    }

    public function setNbVoyager(int $nbVoyager): self
    {
        $this->nbVoyager = $nbVoyager;

        return $this;
    }
}
