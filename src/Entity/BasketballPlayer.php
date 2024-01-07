<?php

namespace App\Entity;

use App\Repository\BasketballPlayerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BasketballPlayerRepository::class)]
class BasketballPlayer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToOne(inversedBy: 'basketballPlayer', cascade: ['persist', 'remove'])]
    private ?BasketballTeams $team = null;

    public function getId(): ?int
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

    public function getTeam(): ?BasketballTeams
    {
        return $this->team;
    }

    public function setTeam(?BasketballTeams $team): static
    {
        $this->team = $team;

        return $this;
    }
}
