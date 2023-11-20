<?php

namespace App\Entity;

use App\Repository\VehicleRepository;
use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehicleRepository::class)]
class Vehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column(length: 180)]
    private ?string $model = null;

    #[ORM\Column]
    private ?int $mileage = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $year_of_registration = null;

    #[ORM\Column(length: 255)]
    private ?string $equipment = null;

    #[ORM\Column]
    private array $front_pic = [];

    #[ORM\Column(nullable: true)]
    private ?array $pics = null;

    #[ORM\ManyToOne(inversedBy: 'vehicles')]
    private ?Garage $garage = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getMileage(): ?int
    {
        return $this->mileage;
    }

    public function setMileage(int $mileage): static
    {
        $this->mileage = $mileage;

        return $this;
    }

    public function getYearOfRegistration(): ?DateTime
    {
        return $this->year_of_registration;
    }

    public function setYearOfRegistration(DateTime $year_of_registration): static
    {
        $this->year_of_registration = $year_of_registration;

        return $this;
    }

    public function getEquipment(): ?string
    {
        return $this->equipment;
    }

    public function setEquipment(string $equipment): static
    {
        $this->equipment = $equipment;

        return $this;
    }

    public function getFrontPic(): array
    {
        return $this->front_pic;
    }

    public function setFrontPic(array $front_pic): static
    {
        $this->front_pic = $front_pic;

        return $this;
    }

    public function getPics(): ?array
    {
        return $this->pics;
    }

    public function setPics(?array $pics): static
    {
        $this->pics = $pics;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->garage;
    }

    public function setUserId(?User $garage): static
    {
        $this->garage = $garage;

        return $this;
    }
}
