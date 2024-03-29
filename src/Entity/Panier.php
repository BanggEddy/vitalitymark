<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\ManyToOne(inversedBy: 'paniers', cascade: ['remove'])]
    private ?User $iduser = null;

    #[ORM\ManyToOne(inversedBy: 'paniers')]
    private ?Products $idproducts = null;

    #[ORM\ManyToOne(inversedBy: 'paniers')]
    private ?Promo $idpromo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdproducts(): ?Products
    {
        return $this->idproducts;
    }

    public function setIdproducts(?Products $idproducts): static
    {
        $this->idproducts = $idproducts;

        return $this;
    }

    public function getIdpromo(): ?Promo
    {
        return $this->idpromo;
    }

    public function setIdpromo(?Promo $idpromo): static
    {
        $this->idpromo = $idpromo;

        return $this;
    }
}
