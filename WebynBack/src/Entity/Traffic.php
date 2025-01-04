<?php

namespace App\Entity;

use App\Repository\TrafficRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrafficRepository::class)]
#[ORM\Table(name: 'traffic')]
class Traffic
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $pageUrl = null;

    #[ORM\Column(length: 255)]
    private ?string $traffic = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getPageUrl(): ?string
    {
        return $this->pageUrl;
    }

    public function setPageUrl(string $pageUrl): static
    {
        $this->pageUrl = $pageUrl;

        return $this;
    }

    public function getTraffic(): ?string
    {
        return $this->traffic;
    }

    public function setTraffic(string $traffic): static
    {
        $this->traffic = $traffic;

        return $this;
    }
}
