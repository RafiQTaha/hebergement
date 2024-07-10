<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: "users")]

class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $username;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    private $password;

    #[ORM\ManyToMany(targetEntity: UsOperation::class, inversedBy: 'users')]
    private $operations;

    #[ORM\OneToMany(mappedBy: 'UserCreated', targetEntity: TBrdpaiement::class)]
    private $bordereaux;

    #[ORM\Column(type: 'boolean')]
    private $enable = false;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $prenom;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $email;

    #[ORM\OneToMany(mappedBy: 'operateur', targetEntity: TEtudiant::class)]
    private $tEtudiants;

    #[ORM\OneToMany(mappedBy: 'UserCreated', targetEntity: TReglement::class)]
    private $tReglements;

    #[ORM\OneToMany(mappedBy: 'userCreated', targetEntity: TOperationdet::class)]
    private $tOperationDets;

    #[ORM\OneToMany(mappedBy: 'userUpdated', targetEntity: TOperationdet::class)]
    private $tOperationdets;

    #[ORM\OneToMany(mappedBy: 'userAnnulated', targetEntity: TBrdpaiement::class)]
    private $tBrdpaiements;

    #[ORM\OneToMany(mappedBy: 'userAnnulated', targetEntity: TPreinscription::class)]
    private $tPreinscriptions;

    #[ORM\OneToMany(mappedBy: 'userCreated', targetEntity: TPreinscription::class)]
    private $Preinscriptions;

    #[ORM\OneToMany(mappedBy: 'UserCreated', targetEntity: PEtages::class)]
    private Collection $pEtages;

    #[ORM\OneToMany(mappedBy: 'userCreated', targetEntity: TChambre::class)]
    private Collection $tChambres;

    #[ORM\OneToMany(mappedBy: 'usercreated', targetEntity: Grille::class)]
    private Collection $grilles;

    #[ORM\OneToMany(mappedBy: 'UserUpdated', targetEntity: Grille::class)]
    private Collection $updategrilles;

    #[ORM\OneToMany(mappedBy: 'userCreated', targetEntity: Lit::class)]
    private Collection $lits;

    #[ORM\OneToMany(mappedBy: 'userUpdated', targetEntity: Lit::class)]
    private Collection $litsUserUpdated;

    #[ORM\OneToMany(mappedBy: 'userCreated', targetEntity: LitInscription::class)]
    private Collection $litInscriptions;

    #[ORM\OneToMany(mappedBy: 'UserUpdated', targetEntity: LitInscription::class)]
    private Collection $litInscriptionsUserUpdated;


    public function __construct()
    {
        $this->operations = new ArrayCollection();
        $this->bordereaux = new ArrayCollection();
        $this->tEtudiants = new ArrayCollection();
        $this->tReglements = new ArrayCollection();
        $this->tOperationDets = new ArrayCollection();
        $this->tOperationdets = new ArrayCollection();
        $this->tBrdpaiements = new ArrayCollection();
        $this->tPreinscriptions = new ArrayCollection();
        $this->Preinscriptions = new ArrayCollection();
        $this->pEtages = new ArrayCollection();
        $this->tChambres = new ArrayCollection();
        $this->grilles = new ArrayCollection();
        $this->updategrilles = new ArrayCollection();
        $this->lits = new ArrayCollection();
        $this->litsUserUpdated = new ArrayCollection();
        $this->litInscriptions = new ArrayCollection();
        $this->litInscriptionsUserUpdated = new ArrayCollection();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection|UsOperation[]
     */
    public function getOperations(): Collection
    {
        return $this->operations;
    }

    public function addOperation(UsOperation $operation): self
    {
        if (!$this->operations->contains($operation)) {
            $this->operations[] = $operation;
        }

        return $this;
    }

    public function removeOperation(UsOperation $operation): self
    {
        $this->operations->removeElement($operation);

        return $this;
    }

    /**
     * @return Collection|TBrdpaiement[]
     */
    public function getBordereaux(): Collection
    {
        return $this->bordereaux;
    }

    public function addBordereaux(TBrdpaiement $bordereaux): self
    {
        if (!$this->bordereaux->contains($bordereaux)) {
            $this->bordereaux[] = $bordereaux;
            $bordereaux->setUserCreated($this);
        }

        return $this;
    }

    public function removeBordereaux(TBrdpaiement $bordereaux): self
    {
        if ($this->bordereaux->removeElement($bordereaux)) {
            // set the owning side to null (unless already changed)
            if ($bordereaux->getUserCreated() === $this) {
                $bordereaux->setUserCreated(null);
            }
        }

        return $this;
    }


    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    public function setEnable(bool $enable): self
    {
        $this->enable = $enable;

        return $this;
    }


    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Collection<int, TEtudiant>
     */
    public function getTEtudiants(): Collection
    {
        return $this->tEtudiants;
    }

    public function addTEtudiant(TEtudiant $tEtudiant): self
    {
        if (!$this->tEtudiants->contains($tEtudiant)) {
            $this->tEtudiants[] = $tEtudiant;
            $tEtudiant->setOperateur($this);
        }

        return $this;
    }

    public function removeTEtudiant(TEtudiant $tEtudiant): self
    {
        if ($this->tEtudiants->removeElement($tEtudiant)) {
            // set the owning side to null (unless already changed)
            if ($tEtudiant->getOperateur() === $this) {
                $tEtudiant->setOperateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TReglement>
     */
    public function getTReglements(): Collection
    {
        return $this->tReglements;
    }

    public function addTReglement(TReglement $tReglement): self
    {
        if (!$this->tReglements->contains($tReglement)) {
            $this->tReglements[] = $tReglement;
            $tReglement->setUserCreated($this);
        }

        return $this;
    }

    public function removeTReglement(TReglement $tReglement): self
    {
        if ($this->tReglements->removeElement($tReglement)) {
            // set the owning side to null (unless already changed)
            if ($tReglement->getUserCreated() === $this) {
                $tReglement->setUserCreated(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TOperationDet>
     */
    public function getTOperationDets(): Collection
    {
        return $this->tOperationDets;
    }

    public function addTOperationDet(TOperationDet $tOperationDet): self
    {
        if (!$this->tOperationDets->contains($tOperationDet)) {
            $this->tOperationDets[] = $tOperationDet;
            $tOperationDet->setUserCreated($this);
        }

        return $this;
    }

    public function removeTOperationDet(TOperationDet $tOperationDet): self
    {
        if ($this->tOperationDets->removeElement($tOperationDet)) {
            // set the owning side to null (unless already changed)
            if ($tOperationDet->getUserCreated() === $this) {
                $tOperationDet->setUserCreated(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TBrdpaiement>
     */
    public function getTBrdpaiements(): Collection
    {
        return $this->tBrdpaiements;
    }

    public function addTBrdpaiement(TBrdpaiement $tBrdpaiement): self
    {
        if (!$this->tBrdpaiements->contains($tBrdpaiement)) {
            $this->tBrdpaiements[] = $tBrdpaiement;
            $tBrdpaiement->setUserAnnulated($this);
        }

        return $this;
    }

    public function removeTBrdpaiement(TBrdpaiement $tBrdpaiement): self
    {
        if ($this->tBrdpaiements->removeElement($tBrdpaiement)) {
            // set the owning side to null (unless already changed)
            if ($tBrdpaiement->getUserAnnulated() === $this) {
                $tBrdpaiement->setUserAnnulated(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TPreinscription>
     */
    public function getTPreinscriptions(): Collection
    {
        return $this->tPreinscriptions;
    }

    public function addTPreinscription(TPreinscription $tPreinscription): self
    {
        if (!$this->tPreinscriptions->contains($tPreinscription)) {
            $this->tPreinscriptions[] = $tPreinscription;
            $tPreinscription->setUserAnnulated($this);
        }

        return $this;
    }

    public function removeTPreinscription(TPreinscription $tPreinscription): self
    {
        if ($this->tPreinscriptions->removeElement($tPreinscription)) {
            // set the owning side to null (unless already changed)
            if ($tPreinscription->getUserAnnulated() === $this) {
                $tPreinscription->setUserAnnulated(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TPreinscription>
     */
    public function getPreinscriptions(): Collection
    {
        return $this->Preinscriptions;
    }

    public function addPreinscription(TPreinscription $preinscription): self
    {
        if (!$this->Preinscriptions->contains($preinscription)) {
            $this->Preinscriptions[] = $preinscription;
            $preinscription->setUserCreated($this);
        }

        return $this;
    }

    public function removePreinscription(TPreinscription $preinscription): self
    {
        if ($this->Preinscriptions->removeElement($preinscription)) {
            // set the owning side to null (unless already changed)
            if ($preinscription->getUserCreated() === $this) {
                $preinscription->setUserCreated(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PEtages>
     */
    public function getPEtages(): Collection
    {
        return $this->pEtages;
    }

    public function addPEtage(PEtages $pEtage): static
    {
        if (!$this->pEtages->contains($pEtage)) {
            $this->pEtages->add($pEtage);
            $pEtage->setUserCreated($this);
        }

        return $this;
    }

    public function removePEtage(PEtages $pEtage): static
    {
        if ($this->pEtages->removeElement($pEtage)) {
            // set the owning side to null (unless already changed)
            if ($pEtage->getUserCreated() === $this) {
                $pEtage->setUserCreated(null);
            }
        }

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
            $tChambre->setUserCreated($this);
        }

        return $this;
    }

    public function removeTChambre(TChambre $tChambre): static
    {
        if ($this->tChambres->removeElement($tChambre)) {
            // set the owning side to null (unless already changed)
            if ($tChambre->getUserCreated() === $this) {
                $tChambre->setUserCreated(null);
            }
        }

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
            $grille->setUsercreated($this);
        }

        return $this;
    }

    public function removeGrille(Grille $grille): static
    {
        if ($this->grilles->removeElement($grille)) {
            // set the owning side to null (unless already changed)
            if ($grille->getUsercreated() === $this) {
                $grille->setUsercreated(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Grille>
     */
    public function getUpdategrilles(): Collection
    {
        return $this->updategrilles;
    }

    public function addUpdategrille(Grille $updategrille): static
    {
        if (!$this->updategrilles->contains($updategrille)) {
            $this->updategrilles->add($updategrille);
            $updategrille->setUserUpdated($this);
        }

        return $this;
    }

    public function removeUpdategrille(Grille $updategrille): static
    {
        if ($this->updategrilles->removeElement($updategrille)) {
            // set the owning side to null (unless already changed)
            if ($updategrille->getUserUpdated() === $this) {
                $updategrille->setUserUpdated(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Lit>
     */
    public function getLits(): Collection
    {
        return $this->lits;
    }

    public function addLit(Lit $lit): static
    {
        if (!$this->lits->contains($lit)) {
            $this->lits->add($lit);
            $lit->setUserCreated($this);
        }

        return $this;
    }

    public function removeLit(Lit $lit): static
    {
        if ($this->lits->removeElement($lit)) {
            // set the owning side to null (unless already changed)
            if ($lit->getUserCreated() === $this) {
                $lit->setUserCreated(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Lit>
     */
    public function getLitsUserUpdated(): Collection
    {
        return $this->litsUserUpdated;
    }

    public function addLitsUserUpdated(Lit $litsUserUpdated): static
    {
        if (!$this->litsUserUpdated->contains($litsUserUpdated)) {
            $this->litsUserUpdated->add($litsUserUpdated);
            $litsUserUpdated->setUserUpdated($this);
        }

        return $this;
    }

    public function removeLitsUserUpdated(Lit $litsUserUpdated): static
    {
        if ($this->litsUserUpdated->removeElement($litsUserUpdated)) {
            // set the owning side to null (unless already changed)
            if ($litsUserUpdated->getUserUpdated() === $this) {
                $litsUserUpdated->setUserUpdated(null);
            }
        }

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
            $litInscription->setUserCreated($this);
        }

        return $this;
    }

    public function removeLitInscription(LitInscription $litInscription): static
    {
        if ($this->litInscriptions->removeElement($litInscription)) {
            // set the owning side to null (unless already changed)
            if ($litInscription->getUserCreated() === $this) {
                $litInscription->setUserCreated(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, LitInscription>
     */
    public function getLitInscriptionsUserUpdated(): Collection
    {
        return $this->litInscriptionsUserUpdated;
    }

    public function addLitInscriptionsUserUpdated(LitInscription $litInscriptionsUserUpdated): static
    {
        if (!$this->litInscriptionsUserUpdated->contains($litInscriptionsUserUpdated)) {
            $this->litInscriptionsUserUpdated->add($litInscriptionsUserUpdated);
            $litInscriptionsUserUpdated->setUserUpdated($this);
        }

        return $this;
    }

    public function removeLitInscriptionsUserUpdated(LitInscription $litInscriptionsUserUpdated): static
    {
        if ($this->litInscriptionsUserUpdated->removeElement($litInscriptionsUserUpdated)) {
            // set the owning side to null (unless already changed)
            if ($litInscriptionsUserUpdated->getUserUpdated() === $this) {
                $litInscriptionsUserUpdated->setUserUpdated(null);
            }
        }

        return $this;
    }

}