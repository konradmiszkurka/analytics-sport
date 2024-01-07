<?php

namespace App\Entity;

use App\Repository\BasketballTeamsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BasketballTeamsRepository::class)]
class BasketballTeams
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToOne(mappedBy: 'team', cascade: ['persist', 'remove'])]
    private ?BasketballPlayer $basketballPlayer = null;

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

    public function getBasketballPlayer(): ?BasketballPlayer
    {
        return $this->basketballPlayer;
    }

    public function setBasketballPlayer(?BasketballPlayer $basketballPlayer): static
    {
        // unset the owning side of the relation if necessary
        if ($basketballPlayer === null && $this->basketballPlayer !== null) {
            $this->basketballPlayer->setTeam(null);
        }

        // set the owning side of the relation if necessary
        if ($basketballPlayer !== null && $basketballPlayer->getTeam() !== $this) {
            $basketballPlayer->setTeam($this);
        }

        $this->basketballPlayer = $basketballPlayer;

        return $this;
    }
}
