<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: LivreRepository::class)]
#[ApiResource(paginationItemsPerPage: 20,
operations:[new Get(normalizationContext: ['groups' => 'livre:item']),
            new GetCollection(normalizationContext: ['groups' => 'livre:list'])])]
class Livre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    #[Groups(['livre:list', 'list:item'])]
    private ?string $titre = null;

    #[ORM\Column(length: 75)]
    #[Groups(['livre:list', 'list:item'])]
    private ?string $auteur = null;

    #[ORM\Column]
    #[Groups(['livre:list', 'list:item'])]
    private ?string $prix = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups(['livre:list', 'list:item'])]
    private ?\DateTimeInterface $datePubli = null;

    #[ORM\Column(length: 50)]
    #[Groups(['livre:list', 'list:item'])]
    private ?string $editeur = null;

    #[ORM\Column(length: 50)]
    #[Groups(['livre:list', 'list:item'])]
    private ?string $langue = null;

    #[ORM\Column(length: 255)]
    #[Groups(['livre:list', 'list:item'])]
    private ?string $couverture = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['livre:list', 'list:item'])]
    private ?string $resume = null;

    #[ORM\ManyToOne(inversedBy: 'livres')]
    #[Groups(['livre:list', 'list:item', 'type:list', 'type:item'])]
    private ?Type $type = null;

    #[ORM\ManyToOne(inversedBy: 'livres')]
    #[Groups(['livre:list', 'list:item', 'genre:list', 'genre:item'])]
    private ?Genre $genre = null;

    #[ORM\OneToMany(mappedBy: 'livre', targetEntity: Ajouter::class)]
    #[Groups(['panier:item', 'panier:list', 'livre:item', 'livre:list'])]
    private Collection $ajouters;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $format = null;

    public function __construct()
    {
        $this->paniers = new ArrayCollection();
        $this->ajouters = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDatePubli(): ?\DateTimeInterface
    {
        return $this->datePubli;
    }

    public function setDatePubli(\DateTimeInterface $datePubli): static
    {
        $this->datePubli = $datePubli;

        return $this;
    }

    public function getEditeur(): ?string
    {
        return $this->editeur;
    }

    public function setEditeur(string $editeur): static
    {
        $this->editeur = $editeur;

        return $this;
    }

    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(string $langue): static
    {
        $this->langue = $langue;

        return $this;
    }

    public function getCouverture(): ?string
    {
        return $this->couverture;
    }

    public function setCouverture(string $couverture): static
    {
        $this->couverture = $couverture;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): static
    {
        $this->resume = $resume;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getGenre(): ?Genre
    {
        return $this->genre;
    }

    public function setGenre(?Genre $genre): static
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * @return Collection<int, Ajouter>
     */
    public function getAjouters(): Collection
    {
        return $this->ajouters;
    }

    public function addAjouter(Ajouter $ajouter): static
    {
        if (!$this->ajouters->contains($ajouter)) {
            $this->ajouters->add($ajouter);
            $ajouter->setLivre($this);
        }

        return $this;
    }

    public function removeAjouter(Ajouter $ajouter): static
    {
        if ($this->ajouters->removeElement($ajouter)) {
            // set the owning side to null (unless already changed)
            if ($ajouter->getLivre() === $this) {
                $ajouter->setLivre(null);
            }
        }

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): static
    {
        $this->format = $format;

        return $this;
    }  
}
