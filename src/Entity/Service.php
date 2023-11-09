<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $service_name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'service', targetEntity: User::class)]
    private Collection $administrator_id;

    public function __construct()
    {
        $this->administrator_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServiceName(): ?string
    {
        return $this->service_name;
    }

    public function setServiceName(string $service_name): static
    {
        $this->service_name = $service_name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getAdministratorId(): Collection
    {
        return $this->administrator_id;
    }

    public function addAdministratorId(User $administratorId): static
    {
        if (!$this->administrator_id->contains($administratorId)) {
            $this->administrator_id->add($administratorId);
            $administratorId->setService($this);
        }

        return $this;
    }

    public function removeAdministratorId(User $administratorId): static
    {
        if ($this->administrator_id->removeElement($administratorId)) {
            // set the owning side to null (unless already changed)
            if ($administratorId->getService() === $this) {
                $administratorId->setService(null);
            }
        }

        return $this;
    }
}
