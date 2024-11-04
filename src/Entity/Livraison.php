<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $produit = null;

    #[ORM\Column]
    private ?int $idUtilisateur = null;

    #[ORM\Column(length: 255)]
    private ?string $AdresseUtilisateur = null;

    #[ORM\Column(length: 255)]
    private ?string $FrequenceLivraison = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): static
    {
        $this->produit = $produit;

        return $this;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(int $idUtilisateur): static
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    public function getAdresseUtilisateur(): ?string
    {
        return $this->AdresseUtilisateur;
    }

    public function setAdresseUtilisateur(string $AdresseUtilisateur): static
    {
        $this->AdresseUtilisateur = $AdresseUtilisateur;

        return $this;
    }

    public function getFrequenceLivraison(): ?string
    {
        return $this->FrequenceLivraison;
    }

    public function setFrequenceLivraison(string $FrequenceLivraison): static
    {
        $this->FrequenceLivraison = $FrequenceLivraison;

        return $this;
    }
}
