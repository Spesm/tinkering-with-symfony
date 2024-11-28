<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\Column(type: UuidType::NAME, unique: true)]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private ?Uuid $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 65535, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $parent_id = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $main_image_url = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $additional_image_urls = null;

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getParentId(): ?int
    {
        return $this->parent_id;
    }

    public function setParentId(?int $parent_id): static
    {
        $this->parent_id = $parent_id;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getMainImageUrl(): ?string
    {
        return $this->main_image_url;
    }

    public function setMainImageUrl(?string $main_image_url): static
    {
        $this->main_image_url = $main_image_url;

        return $this;
    }

    public function getAdditionalImageUrls(): ?string
    {
        return $this->additional_image_urls;
    }

    public function setAdditionalImageUrls(?string $additional_image_urls): static
    {
        $this->additional_image_urls = $additional_image_urls;

        return $this;
    }
}
