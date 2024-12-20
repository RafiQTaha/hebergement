<?php

namespace App\Entity;

use App\Repository\TInscriptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TInscriptionRepository::class)]
class TInscription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: PStatut::class, inversedBy: 'inscriptions')]
    private $statut;

    #[ORM\ManyToOne(targetEntity: TAdmission::class, inversedBy: 'inscriptions')]
    private $admission;

    #[ORM\ManyToOne(targetEntity: AcAnnee::class, inversedBy: 'inscriptions')]
    private $annee;

    #[ORM\ManyToOne(targetEntity: AcPromotion::class, inversedBy: 'inscriptions')]
    private $promotion;

    #[ORM\ManyToOne(targetEntity: User::class)]
    private $userCreated;

    #[ORM\ManyToOne(targetEntity: User::class)]
    private $userUpdated;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $code;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $codeAnonymat;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $codeAnonymatRat;

    #[ORM\Column(type: 'smallint', nullable: true)]
    private $reserve;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $motif;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $emplacement;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $typeCand;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $created;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $updated;

    #[ORM\Column(type: 'string', nullable: true)]
    private $salle;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $statutUpdated;

    #[ORM\ManyToOne(targetEntity: User::class)]
    private $userStatutUpdated;

    #[ORM\ManyToOne(targetEntity: PGroupe::class, inversedBy: 'inscriptions')]
    private $groupe;

    #[ORM\OneToMany(mappedBy: 'inscription', targetEntity: LitInscription::class)]
    private Collection $litInscriptions;

    public function __construct()
    {
        $this->litInscriptions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatut(): ?PStatut
    {
        return $this->statut;
    }

    public function setStatut(?PStatut $statut): self
    {
        $this->statut = $statut;

        return $this;
    }


    public function getAdmission(): ?TAdmission
    {
        return $this->admission;
    }

    public function setAdmission(?TAdmission $admission): self
    {
        $this->admission = $admission;

        return $this;
    }

    public function getAnnee(): ?AcAnnee
    {
        return $this->annee;
    }

    public function setAnnee(?AcAnnee $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getPromotion(): ?AcPromotion
    {
        return $this->promotion;
    }

    public function setPromotion(?AcPromotion $promotion): self
    {
        $this->promotion = $promotion;

        return $this;
    }

    public function getUserCreated(): ?user
    {
        return $this->userCreated;
    }

    public function setUserCreated(?user $userCreated): self
    {
        $this->userCreated = $userCreated;

        return $this;
    }

    public function getUserUpdated(): ?user
    {
        return $this->userUpdated;
    }

    public function setUserUpdated(?user $userUpdated): self
    {
        $this->userUpdated = $userUpdated;

        return $this;
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

    public function getCodeAnonymat(): ?string
    {
        return $this->codeAnonymat;
    }

    public function setCodeAnonymat(?string $codeAnonymat): self
    {
        $this->codeAnonymat = $codeAnonymat;

        return $this;
    }

    public function getCodeAnonymatRat(): ?string
    {
        return $this->codeAnonymatRat;
    }

    public function setCodeAnonymatRat(?string $codeAnonymatRat): self
    {
        $this->codeAnonymatRat = $codeAnonymatRat;

        return $this;
    }

    public function getReserve(): ?int
    {
        return $this->reserve;
    }

    public function setReserve(?int $reserve): self
    {
        $this->reserve = $reserve;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(?string $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    public function getEmplacement(): ?int
    {
        return $this->emplacement;
    }

    public function setEmplacement(int $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getTypeCand(): ?string
    {
        return $this->typeCand;
    }

    public function setTypeCand(?string $typeCand): self
    {
        $this->typeCand = $typeCand;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(?\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(?\DateTimeInterface $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    public function getSalle(): ?string
    {
        return $this->salle;
    }

    public function setSalle(?string $salle): self
    {
        $this->salle = $salle;

        return $this;
    }

    public function getUserStatutUpdated(): ?user
    {
        return $this->userStatutUpdated;
    }

    public function setUserStatutUpdated(?user $userStatutUpdated): self
    {
        $this->userStatutUpdated = $userStatutUpdated;

        return $this;
    }

    public function getStatutUpdated(): ?\DateTimeInterface
    {
        return $this->statutUpdated;
    }

    public function setStatutUpdated(?\DateTimeInterface $statutUpdated): self
    {
        $this->statutUpdated = $statutUpdated;

        return $this;
    }
    
    public function getGroupe(): ?PGroupe
    {
        return $this->groupe;
    }

    public function setGroupe(?PGroupe $groupe): self
    {
        $this->groupe = $groupe;

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
            $litInscription->setInscription($this);
        }

        return $this;
    }

    public function removeLitInscription(LitInscription $litInscription): static
    {
        if ($this->litInscriptions->removeElement($litInscription)) {
            // set the owning side to null (unless already changed)
            if ($litInscription->getInscription() === $this) {
                $litInscription->setInscription(null);
            }
        }

        return $this;
    }

}
