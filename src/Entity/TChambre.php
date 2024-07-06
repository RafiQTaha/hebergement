<?php

namespace App\Entity;

use App\Repository\TChambreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TChambreRepository::class)]
class TChambre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $designation = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $abreviation = null;

    #[ORM\ManyToOne(inversedBy: 'tChambres')]
    private ?PEtages $etage = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $created = null;

    #[ORM\ManyToOne(inversedBy: 'tChambres')]
    private ?User $userCreated = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updated = null;

    #[ORM\ManyToOne(inversedBy: 'tChambres')]
    private ?user $userUpdated = null;

    #[ORM\Column(nullable: true)]
    private ?float $active = null;

    #[ORM\ManyToOne(inversedBy: 'chambres')]
    private ?TypeChambre $typeChambre = null;

    #[ORM\ManyToOne(inversedBy: 'chambres')]
    private ?StatutChambre $statutChambre = null;

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

    public function getAbreviation(): ?string
    {
        return $this->abreviation;
    }

    public function setAbreviation(?string $abreviation): static
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    public function getEtage(): ?PEtages
    {
        return $this->etage;
    }

    public function setEtage(?PEtages $etage): static
    {
        $this->etage = $etage;

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

    public function getUserUpdated(): ?user
    {
        return $this->userUpdated;
    }

    public function setUserUpdated(?user $userUpdated): static
    {
        $this->userUpdated = $userUpdated;

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

    public function getTypeChambre(): ?TypeChambre
    {
        return $this->typeChambre;
    }

    public function setTypeChambre(?TypeChambre $typeChambre): static
    {
        $this->typeChambre = $typeChambre;

        return $this;
    }

    public function getStatutChambre(): ?StatutChambre
    {
        return $this->statutChambre;
    }

    public function setStatutChambre(?StatutChambre $statutChambre): static
    {
        $this->statutChambre = $statutChambre;

        return $this;
    }
}
