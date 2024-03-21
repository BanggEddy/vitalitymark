<?php

namespace App\Entity;

use App\Repository\CouponRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CouponRepository::class)]
class Coupon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $start_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $end_date = null;

    #[ORM\ManyToMany(targetEntity: LoyaltyCard::class, inversedBy: 'coupons')]
    private Collection $idloyaltycard;

    #[ORM\Column(nullable: true)]
    private ?float $reduction = null;

    public function __construct()
    {
        $this->idloyaltycard = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(?\DateTimeInterface $start_date): static
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(?\DateTimeInterface $end_date): static
    {
        $this->end_date = $end_date;

        return $this;
    }

    /**
     * @return Collection<int, LoyaltyCard>
     */
    public function getIdloyaltycard(): Collection
    {
        return $this->idloyaltycard;
    }

    public function addIdloyaltycard(LoyaltyCard $idloyaltycard): static
    {
        if (!$this->idloyaltycard->contains($idloyaltycard)) {
            $this->idloyaltycard->add($idloyaltycard);
        }

        return $this;
    }

    public function removeIdloyaltycard(LoyaltyCard $idloyaltycard): static
    {
        $this->idloyaltycard->removeElement($idloyaltycard);

        return $this;
    }

    public function getReduction(): ?float
    {
        return $this->reduction;
    }

    public function setReduction(?float $reduction): static
    {
        $this->reduction = $reduction;

        return $this;
    }
}
