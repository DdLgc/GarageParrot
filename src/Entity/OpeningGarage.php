<?php

namespace App\Entity;

use App\Repository\OpeningGarageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpeningGarageRepository::class)]
class OpeningGarage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $day_of_week = null;

    #[ORM\Column(length: 255)]
    private ?string $opening_hours = null;

    #[ORM\Column(length: 255)]
    private ?string $closing_hours = null;

    #[ORM\OneToOne(inversedBy: 'openingGarage', cascade: ['persist', 'remove'])]
    private ?User $administrator_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDayOfWeek(): ?string
    {
        return $this->day_of_week;
    }

    public function setDayOfWeek(string $day_of_week): static
    {
        $this->day_of_week = $day_of_week;

        return $this;
    }

    public function getOpeningHours(): ?string
    {
        return $this->opening_hours;
    }

    public function setOpeningHours(string $opening_hours): static
    {
        $this->opening_hours = $opening_hours;

        return $this;
    }

    public function getClosingHours(): ?string
    {
        return $this->closing_hours;
    }

    public function setClosingHours(string $closing_hours): static
    {
        $this->closing_hours = $closing_hours;

        return $this;
    }

    public function getAdministratorId(): ?User
    {
        return $this->administrator_id;
    }

    public function setAdministratorId(?User $administrator_id): static
    {
        $this->administrator_id = $administrator_id;

        return $this;
    }
}
