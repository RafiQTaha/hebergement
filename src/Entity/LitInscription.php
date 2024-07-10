<?php

namespace App\Entity;

use App\Repository\LitInscriptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LitInscriptionRepository::class)]
class LitInscription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'litInscriptions')]
    private ?TInscription $inscription = null;

    #[ORM\ManyToOne(inversedBy: 'litInscriptions')]
    private ?Lit $lit = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $start = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $end = null;

    #[ORM\Column(nullable: true)]
    private ?float $active = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $created = null;

    #[ORM\ManyToOne(inversedBy: 'litInscriptions')]
    private ?User $userCreated = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updated = null;

    #[ORM\ManyToOne(inversedBy: 'litInscriptionsUserUpdated')]
    private ?User $UserUpdated = null;

    #[ORM\OneToMany(mappedBy: 'litInscription', targetEntity: TOperationcab::class)]
    private Collection $tOperationcabs;

    public function __construct()
    {
        $this->tOperationcabs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInscription(): ?TInscription
    {
        return $this->inscription;
    }

    public function setInscription(?TInscription $inscription): static
    {
        $this->inscription = $inscription;

        return $this;
    }

    public function getLit(): ?Lit
    {
        return $this->lit;
    }

    public function setLit(?Lit $lit): static
    {
        $this->lit = $lit;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(?\DateTimeInterface $start): static
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(?\DateTimeInterface $end): static
    {
        $this->end = $end;

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

    public function getUserCreated(): ?User
    {
        return $this->userCreated;
    }

    public function setUserCreated(?User $userCreated): static
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

    public function getUserUpdated(): ?User
    {
        return $this->UserUpdated;
    }

    public function setUserUpdated(?User $UserUpdated): static
    {
        $this->UserUpdated = $UserUpdated;

        return $this;
    }

    /**
     * @return Collection<int, TOperationcab>
     */
    public function getTOperationcabs(): Collection
    {
        return $this->tOperationcabs;
    }

    public function addTOperationcab(TOperationcab $tOperationcab): static
    {
        if (!$this->tOperationcabs->contains($tOperationcab)) {
            $this->tOperationcabs->add($tOperationcab);
            $tOperationcab->setLitInscription($this);
        }

        return $this;
    }

    public function removeTOperationcab(TOperationcab $tOperationcab): static
    {
        if ($this->tOperationcabs->removeElement($tOperationcab)) {
            // set the owning side to null (unless already changed)
            if ($tOperationcab->getLitInscription() === $this) {
                $tOperationcab->setLitInscription(null);
            }
        }

        return $this;
    }
}
