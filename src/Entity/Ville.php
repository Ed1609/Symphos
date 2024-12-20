<?php

namespace App\Entity;

use App\Repository\VilleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VilleRepository::class)]
class Ville
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $pays = null;

    #[ORM\Column]
    private ?int $dureeLivraison = null;

    #[ORM\Column(length: 255)]
    private ?string $partenaireTransite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function getDureeLivraison(): ?int
    {
        return $this->dureeLivraison;
    }

    public function setDureeLivraison(int $dureeLivraison): static
    {
        $this->dureeLivraison = $dureeLivraison;

        return $this;
    }

    public function getPartenaireTransite(): ?string
    {
        return $this->partenaireTransite;
    }

    public function setPartenaireTransite(string $partenaireTransite): static
    {
        $this->partenaireTransite = $partenaireTransite;

        return $this;
    }
}
