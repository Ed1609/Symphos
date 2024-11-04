<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libele = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $type_produit = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $discountPrice = null;

    #[ORM\Column(length: 255)]
    private ?string $ImageUrl = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?int $quantite = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $addAt = null;

    #[ORM\Column(length: 100)]
    private ?string $admin = null;

    #[ORM\Column(length: 25)]
    private ?string $section = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ImageUrl1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ImageUrl2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ImageUrl3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ImageUrl4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ImageUrl5 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ImageUrl6 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description1 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description2 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description3 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $taille = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $couleur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ImageUrlDump1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ImageUrlDump2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ImageUrlDump3 = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column]
    private ?bool $EnPromotion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $SlidePromo = null;

    #[ORM\Column(length: 255)]
    private ?string $NonCollection = null;

    #[ORM\Column(length: 255)]
    private ?string $DetailPromo = null;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: Card::class)]
    private Collection $cards;

    public function __construct()
    {
        $this->cards = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibele(): ?string
    {
        return $this->libele;
    }

    public function setLibele(string $libele): static
    {
        $this->libele = $libele;

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

    public function getTypeProduit(): ?string
    {
        return $this->type_produit;
    }

    public function setTypeProduit(string $type_produit): static
    {
        $this->type_produit = $type_produit;

        return $this;
    }

    public function getDiscountPrice(): ?string
    {
        return $this->discountPrice;
    }

    public function setDiscountPrice(?string $discountPrice): static
    {
        $this->discountPrice = $discountPrice;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->ImageUrl;
    }

    public function setImageUrl(string $ImageUrl): static
    {
        $this->ImageUrl = $ImageUrl;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getAddAt(): ?\DateTimeImmutable
    {
        return $this->addAt;
    }

    public function setAddAt(\DateTimeImmutable $addAt): static
    {
        $this->addAt = $addAt;

        return $this;
    }

    public function getAdmin(): ?string
    {
        return $this->admin;
    }

    public function setAdmin(string $admin): static
    {
        $this->admin = $admin;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section): static
    {
        $this->section = $section;

        return $this;
    }

    public function getImageUrl1(): ?string
    {
        return $this->ImageUrl1;
    }

    public function setImageUrl1(?string $ImageUrl1): static
    {
        $this->ImageUrl1 = $ImageUrl1;

        return $this;
    }

    public function getImageUrl2(): ?string
    {
        return $this->ImageUrl2;
    }

    public function setImageUrl2(?string $ImageUrl2): static
    {
        $this->ImageUrl2 = $ImageUrl2;

        return $this;
    }

    public function getImageUrl3(): ?string
    {
        return $this->ImageUrl3;
    }

    public function setImageUrl3(?string $ImageUrl3): static
    {
        $this->ImageUrl3 = $ImageUrl3;

        return $this;
    }

    public function getImageUrl4(): ?string
    {
        return $this->ImageUrl4;
    }

    public function setImageUrl4(?string $ImageUrl4): static
    {
        $this->ImageUrl4 = $ImageUrl4;

        return $this;
    }

    public function getImageUrl5(): ?string
    {
        return $this->ImageUrl5;
    }

    public function setImageUrl5(?string $ImageUrl5): static
    {
        $this->ImageUrl5 = $ImageUrl5;

        return $this;
    }

    public function getImageUrl6(): ?string
    {
        return $this->ImageUrl6;
    }

    public function setImageUrl6(?string $ImageUrl6): static
    {
        $this->ImageUrl6 = $ImageUrl6;

        return $this;
    }

    public function getDescription1(): ?string
    {
        return $this->description1;
    }

    public function setDescription1(?string $description1): static
    {
        $this->description1 = $description1;

        return $this;
    }

    public function getDescription2(): ?string
    {
        return $this->description2;
    }

    public function setDescription2(?string $description2): static
    {
        $this->description2 = $description2;

        return $this;
    }

    public function getDescription3(): ?string
    {
        return $this->description3;
    }

    public function setDescription3(?string $description3): static
    {
        $this->description3 = $description3;

        return $this;
    }

    public function getDescription4(): ?string
    {
        return $this->description4;
    }

    public function setDescription4(?string $description4): static
    {
        $this->description4 = $description4;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(?string $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(?string $couleur): static
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getImageUrlDump1(): ?string
    {
        return $this->ImageUrlDump1;
    }

    public function setImageUrlDump1(?string $ImageUrlDump1): static
    {
        $this->ImageUrlDump1 = $ImageUrlDump1;

        return $this;
    }

    public function getImageUrlDump2(): ?string
    {
        return $this->ImageUrlDump2;
    }

    public function setImageUrlDump2(?string $ImageUrlDump2): static
    {
        $this->ImageUrlDump2 = $ImageUrlDump2;

        return $this;
    }

    public function getImageUrlDump3(): ?string
    {
        return $this->ImageUrlDump3;
    }

    public function setImageUrlDump3(?string $ImageUrlDump3): static
    {
        $this->ImageUrlDump3 = $ImageUrlDump3;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function isEnPromotion(): ?bool
    {
        return $this->EnPromotion;
    }

    public function setEnPromotion(bool $EnPromotion): static
    {
        $this->EnPromotion = $EnPromotion;

        return $this;
    }

    public function getSlidePromo(): ?string
    {
        return $this->SlidePromo;
    }

    public function setSlidePromo(?string $SlidePromo): static
    {
        $this->SlidePromo = $SlidePromo;

        return $this;
    }

    public function getNonCollection(): ?string
    {
        return $this->NonCollection;
    }

    public function setNonCollection(string $NonCollection): static
    {
        $this->NonCollection = $NonCollection;

        return $this;
    }

    public function getDetailPromo(): ?string
    {
        return $this->DetailPromo;
    }

    public function setDetailPromo(string $DetailPromo): static
    {
        $this->DetailPromo = $DetailPromo;

        return $this;
    }

    
}
