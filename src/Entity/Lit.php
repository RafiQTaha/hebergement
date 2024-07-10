<?php

namespace App\Entity;

use App\Repository\LitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LitRepository::class)]
class Lit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $position = null;

    #[ORM\ManyToOne(inversedBy: 'lits')]
    private ?TChambre $chambre = null;

    #[ORM\Column(nullable: true)]
    private ?float $active = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $created = null;

    #[ORM\ManyToOne(inversedBy: 'lits')]
    private ?user $userCreated = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updated = null;

    #[ORM\ManyToOne(inversedBy: 'litsUserUpdated')]
    private ?user $userUpdated = null;

    #[ORM\OneToMany(mappedBy: 'lit', targetEntity: LitInscription::class)]
    private Collection $litInscriptions;

    public function __construct()
    {
        $this->litInscriptions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function getChambre(): ?TChambre
    {
        return $this->chambre;
    }

    public function setChambre(?TChambre $chambre): static
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function getActive(): ?float
    {
        return $this->active;
    }

    public function setActive(?float $active): static
    {
        $this->active = $active;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(?\DateTimeInterface $created): static
    {
        $this->created = $created;

        return $this;
    }

    public function getUserCreated(): ?user
    {
        return $this->userCreated;
    }

    public function setUserCreated(?user $userCreated): static
    {
        $this->userCreated = $userCreated;

        return $this;
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(?\DateTimeInterface $updated): static
    {
        $this->updated = $updated;

        return $this;
    }

    public function getUserUpdated(): ?user
    {
        return $this->userUpdated;
    }

    public function setUserUpdated(?user $userUpdated): static
    {
        $this->userUpdated = $userUpdated;

        return $this;
    }

    /**
     * @return Collection<int, LitInscription>
     */
    public function getLitInscriptions(): Collection
    {
        return $this->litInscriptions;
    }

    public function addLitInscription(LitInscription $litInscription): static
    {
        if (!$this->litInscriptions->contains($litInscription)) {
            $this->litInscriptions->add($litInscription);
            $litInscription->setLit($this);
        }

        return $this;
    }

    public function removeLitInscription(LitInscription $litInscription): static
    {
        if ($this->litInscriptions->removeElement($litInscription)) {
            // set the owning side to null (unless already changed)
            if ($litInscription->getLit() === $this) {
                $litInscription->setLit(null);
            }
        }

        return $this;
    }
}
