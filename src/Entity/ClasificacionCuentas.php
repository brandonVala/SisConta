<?php

namespace App\Entity;

use App\Repository\ClasificacionCuentasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClasificacionCuentasRepository::class)]
class ClasificacionCuentas
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
