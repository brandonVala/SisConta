<?php

namespace App\Entity;

use App\Repository\ProcedimientoRegRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProcedimientoRegRepository::class)]
class ProcedimientoReg
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
