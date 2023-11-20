<?php

namespace App\Entity;

use App\Repository\TestimonialRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestimonialRepository::class)]
class Testimonial
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $user_name = null;

    #[ORM\Column(length: 255)]
    private ?string $comment = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $rating = null;

    #[ORM\Column]
    private ?bool $moderation = null;

    #[ORM\ManyToOne(inversedBy: 'testimonials')]
    private ?Garage $garage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->user_name;
    }

    public function setUserName(string $user_name): static
    {
        $this->user_name = $user_name;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): static
    {
        $this->comment = $comment;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function isModeration(): ?bool
    {
        return $this->moderation;
    }

    public function setModeration(bool $moderation): static
    {
        $this->moderation = $moderation;

        return $this;
    }

    public function getUserId(): ?Garage
    {
        return $this->garage;
    }

    public function setUserId(?Garage $garage): static
    {
        $this->garage = $garage;

        return $this;
    }
}
