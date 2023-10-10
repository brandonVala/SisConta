<?php

namespace App\Entity;

use App\Repository\RegEntradasSalidasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegEntradasSalidasRepository::class)]
class RegEntradasSalidas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
