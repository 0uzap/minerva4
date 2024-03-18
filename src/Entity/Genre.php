<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: GenreRepository::class)]
#[ApiResource(paginationItemsPerPage: 20,
operations:[new Get(normalizationContext: ['groups' => 'genre:item']),
            new GetCollection(normalizationContext: ['groups' => 'genre:list'])])]
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 35)]
    #[Groups(['genre:list', 'genre:item'])]
    private ?string $Nomgenre = null;

    #[ORM\OneToMany(mappedBy: 'genre', targetEntity: Livre::class)]
    #[Groups(['livre:list', 'list:item', 'genre:list', 'genre:item'])]
    private Collection $livres;

    public function __construct()
    {
        $this->livres = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomgenre(): ?string
    {
        return $this->Nomgenre;
    }

    public function setNomgenre(string $Nomgenre): static
    {
        $this->Nomgenre = $Nomgenre;

        return $this;
    }

    /**
     * @return Collection<int, Livre>
     */
    public function getLivres(): Collection
    {
        return $this->livres;
    }

    public function addLivre(Livre $livre): static
    {
        if (!$this->livres->contains($livre)) {
            $this->livres->add($livre);
            $livre->setGenre($this);
        }

        return $this;
    }

    public function removeLivre(Livre $livre): static
    {
        if ($this->livres->removeElement($livre)) {
            // set the owning side to null (unless already changed)
            if ($livre->getGenre() === $this) {
                $livre->setGenre(null);
            }
        }

        return $this;
    }

   
}
