<?php

namespace App\Entity;

use App\Repository\PromoDynamiqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromoDynamiqueRepository::class)]
class PromoDynamique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ImagePromo = null;

    #[ORM\ManyToOne(targetEntity: Product::class)]
    #[ORM\JoinColumn(nullable: false)] 
    private ?int $Id_produit = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $CreateAt = null;

    #[ORM\Column]
    private ?int $DureerJour = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImagePromo(): ?string
    {
        return $this->ImagePromo;
    }

    public function setImagePromo(string $ImagePromo): static
    {
        $this->ImagePromo = $ImagePromo;

        return $this;
    }

    public function getIdProduit(): ?int
    {
        return $this->Id_produit;
    }

    public function setProduct(?Product $product): static
    {
        $this->product = $product;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeImmutable
    {
        return $this->CreateAt;
    }

    public function setCreateAt(\DateTimeImmutable $CreateAt): static
    {
        $this->CreateAt = $CreateAt;

        return $this;
    }

    public function getDureerJour(): ?int
    {
        return $this->DureerJour;
    }

    public function setDureerJour(int $DureerJour): static
    {
        $this->DureerJour = $DureerJour;

        return $this;
    }
}
