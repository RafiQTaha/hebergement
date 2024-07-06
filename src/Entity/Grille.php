<?php

namespace App\Entity;

use App\Repository\GrilleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GrilleRepository::class)]
class Grille
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $designation = null;

    #[ORM\Column]
    private ?float $active = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $created = null;

    #[ORM\ManyToOne(inversedBy: 'grilles')]
    private ?user $usercreated = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updated = null;

    #[ORM\ManyToOne(inversedBy: 'updategrilles')]
    private ?user $UserUpdated = null;

    #[ORM\ManyToOne(inversedBy: 'grilles')]
    private ?TypeChambre $typeChambre = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private $montant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): static
    {
        $this->designation = $designation;

        return $this;
    }

    public function getActive(): ?float
    {
        return $this->active;
    }

    public function setActive(float $active): static
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

    public function getUsercreated(): ?user
    {
        return $this->usercreated;
    }

    public function setUsercreated(?user $usercreated): static
    {
        $this->usercreated = $usercreated;

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
        return $this->UserUpdated;
    }

    public function setUserUpdated(?user $UserUpdated): static
    {
        $this->UserUpdated = $UserUpdated;

        return $this;
    }

    public function getTypeChambre(): ?TypeChambre
    {
        return $this->typeChambre;
    }

    public function setTypeChambre(?TypeChambre $typeChambre): static
    {
        $this->typeChambre = $typeChambre;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(?int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }
}
