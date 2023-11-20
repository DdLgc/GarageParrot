<?php

namespace App\Entity;

use App\Repository\HoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HoursRepository::class)]
class Hours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $day_of_week = null;

    #[ORM\Column(length: 255)]
    private ?string $opening_hours_am = null;

    #[ORM\Column(length: 255)]
    private ?string $opening_hours_pm = null;

    #[ORM\Column(length: 255)]
    private ?string $closing_hours_am = null;

    #[ORM\Column(length: 255)]
    private ?string $closing_hours_pm = null;

    #[ORM\OneToOne(inversedBy: 'Hours', cascade: ['persist', 'remove'])]
    private ?Garage $garage = null;

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

    public function getOpening_hours_am()
    {
        return $this->opening_hours_am;
    }

    public function setOpening_hours_am($opening_hours_am)
    {
        $this->opening_hours_am = $opening_hours_am;

        return $this;
    }

    public function getOpening_hours_pm()
    {
        return $this->opening_hours_pm;
    }

    public function setOpening_hours_pm($opening_hours_pm)
    {
        $this->opening_hours_pm = $opening_hours_pm;

        return $this;
    }

    public function getClosing_hours_am()
    {
        return $this->closing_hours_am;
    }

    public function setClosing_hours_am($closing_hours_am)
    {
        $this->closing_hours_am = $closing_hours_am;

        return $this;
    }

    public function getClosing_hours_pm()
    {
        return $this->closing_hours_pm;
    }


    public function setClosing_hours_pm($closing_hours_pm)
    {
        $this->closing_hours_pm = $closing_hours_pm;

        return $this;
    }
}
