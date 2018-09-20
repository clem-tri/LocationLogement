<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogementRepository")
 */
class Logement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="float")
     */
    private $coorX;

    /**
     * @ORM\Column(type="float")
     */
    private $coorY;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbMaxVoyager;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbRoom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCoorX(): ?float
    {
        return $this->coorX;
    }


    public function setCoorX($coorX): self
    {
        $this->coorX = $coorX;

        return $this;
    }

    public function getCoorY()
    {
        return $this->coorY;
    }

    public function setCoorY($coorY): self

    {
        $this->coorY = $coorY;

        return $this;
    }

    public function getNbMaxVoyager(): ?int
    {
        return $this->nbMaxVoyager;
    }

    public function setNbMaxVoyager(int $nbMaxVoyager): self
    {
        $this->nbMaxVoyager = $nbMaxVoyager;

        return $this;
    }

    public function getNbRoom(): ?int
    {
        return $this->nbRoom;
    }

    public function setNbRoom(int $nbRoom): self
    {
        $this->nbRoom = $nbRoom;

        return $this;
    }


}
