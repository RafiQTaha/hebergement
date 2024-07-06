<?php

namespace App\Entity;

use App\Repository\PEtagesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PEtagesRepository::class)]
class PEtages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $code;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $designation;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $abreviation;

    #[ORM\ManyToOne(inversedBy: 'pEtages')]
    private ?AcDepartement $departement = null;

    #[ORM\Column(nullable: true)]
    private ?float $active = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $created = null;

    #[ORM\ManyToOne(inversedBy: 'pEtages')]
    private ?User $UserCreated = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updated = null;

    #[ORM\ManyToOne(inversedBy: 'pEtages')]
    private ?User $UserUpdated = null;

    #[ORM\OneToMany(mappedBy: 'etage', targetEntity: TChambre::class)]
    private Collection $tChambres;

    public function __construct()
    {
        $this->tChambres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getAbreviation(): ?string
    {
        return $this->abreviation;
    }

    public function setAbreviation(?string $abreviation): self
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    public function getDepartement(): ?AcDepartement
    {
        return $this->departement;
    }

    public function setDepartement(?AcDepartement $departement): static
    {
        $this->departement = $departement;

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
        return $this->UserCreated;
    }

    public function setUserCreated(?User $UserCreated): static
    {
        $this->UserCreated = $UserCreated;

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
     * @return Collection<int, TChambre>
     */
    public function getTChambres(): Collection
    {
        return $this->tChambres;
    }

    public function addTChambre(TChambre $tChambre): static
    {
        if (!$this->tChambres->contains($tChambre)) {
            $this->tChambres->add($tChambre);
            $tChambre->setEtage($this);
        }

        return $this;
    }

    public function removeTChambre(TChambre $tChambre): static
    {
        if ($this->tChambres->removeElement($tChambre)) {
            // set the owning side to null (unless already changed)
            if ($tChambre->getEtage() === $this) {
                $tChambre->setEtage(null);
            }
        }

        return $this;
    }
}
