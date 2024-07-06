<?php

namespace App\Entity;

use App\Repository\TypeChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeChambreRepository::class)]
class TypeChambre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $designation = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $abreviation = null;

    #[ORM\OneToMany(mappedBy: 'typeChambre', targetEntity: TChambre::class)]
    private Collection $chambres;

    #[ORM\Column(nullable: true)]
    private ?float $active = null;

    #[ORM\OneToMany(mappedBy: 'typeChambre', targetEntity: Grille::class)]
    private Collection $grilles;

    public function __construct()
    {
        $this->chambres = new ArrayCollection();
        $this->grilles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, TChambre>
     */
    public function getChambres(): Collection
    {
        return $this->chambres;
    }

    public function addChambre(TChambre $chambre): static
    {
        if (!$this->chambres->contains($chambre)) {
            $this->chambres->add($chambre);
            $chambre->setTypeChambre($this);
        }

        return $this;
    }

    public function removeChambre(TChambre $chambre): static
    {
        if ($this->chambres->removeElement($chambre)) {
            // set the owning side to null (unless already changed)
            if ($chambre->getTypeChambre() === $this) {
                $chambre->setTypeChambre(null);
            }
        }

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

    /**
     * @return Collection<int, Grille>
     */
    public function getGrilles(): Collection
    {
        return $this->grilles;
    }

    public function addGrille(Grille $grille): static
    {
        if (!$this->grilles->contains($grille)) {
            $this->grilles->add($grille);
            $grille->setTypeChambre($this);
        }

        return $this;
    }

    public function removeGrille(Grille $grille): static
    {
        if ($this->grilles->removeElement($grille)) {
            // set the owning side to null (unless already changed)
            if ($grille->getTypeChambre() === $this) {
                $grille->setTypeChambre(null);
            }
        }

        return $this;
    }
}
