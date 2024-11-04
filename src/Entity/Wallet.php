<?php

namespace App\Entity;

use App\Repository\WalletRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WalletRepository::class)]
class Wallet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $IdUtilisateur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $solde = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $AddAt = null;

    public function __construct()
    {
        $this->AddAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->IdUtilisateur;
    }

    public function setIdUtilisateur(int $IdUtilisateur): static
    {
        $this->IdUtilisateur = $IdUtilisateur;

        return $this;
    }

    public function getSolde(): ?string
    {
        return $this->solde;
    }

    public function setSolde(string $solde): static
    {
        $this->solde = $solde;

        return $this;
    }

    public function getAddAt(): ?\DateTimeImmutable
    {
        return $this->AddAt;
    }

    public function setAddAt(\DateTimeImmutable $AddAt): self
    {
        $this->AddAt = $AddAt;

        return $this;
    }
}
