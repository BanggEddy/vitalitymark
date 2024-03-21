<?php

namespace App\Entity;

use App\Repository\LoyaltyCardRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LoyaltyCardRepository::class)]
class LoyaltyCard
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $card_number = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $card_type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $points = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $personalized_offer = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?User $iduser = null;

    #[ORM\ManyToMany(targetEntity: Coupon::class, mappedBy: 'idloyaltycard')]
    private Collection $coupons;

    public function __construct()
    {
        $this->coupons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCardNumber(): ?string
    {
        return $this->card_number;
    }

    public function setCardNumber(?string $card_number): static
    {
        $this->card_number = $card_number;

        return $this;
    }

    public function getCardType(): ?string
    {
        return $this->card_type;
    }

    public function setCardType(?string $card_type): static
    {
        $this->card_type = $card_type;

        return $this;
    }

    public function getPoints(): ?string
    {
        return $this->points;
    }

    public function setPoints(?string $points): static
    {
        $this->points = $points;

        return $this;
    }

    public function getPersonalizedOffer(): ?string
    {
        return $this->personalized_offer;
    }

    public function setPersonalizedOffer(?string $personalized_offer): static
    {
        $this->personalized_offer = $personalized_offer;

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

    /**
     * @return Collection<int, Coupon>
     */
    public function getCoupons(): Collection
    {
        return $this->coupons;
    }

    public function addCoupon(Coupon $coupon): static
    {
        if (!$this->coupons->contains($coupon)) {
            $this->coupons->add($coupon);
            $coupon->addIdloyaltycard($this);
        }

        return $this;
    }

    public function removeCoupon(Coupon $coupon): static
    {
        if ($this->coupons->removeElement($coupon)) {
            $coupon->removeIdloyaltycard($this);
        }

        return $this;
    }
}
