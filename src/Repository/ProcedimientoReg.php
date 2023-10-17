<?php

namespace App\Entity;

use App\Repository\ProcedimientoRegRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: ProcedimientoRegRepository::class)]
class ProcedimientoReg
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "CodigoProcReg", type: "integer")]
    private ?int $CodigoProcReg = null;
    
    #[ORM\Column(length: 45)]
    private ?string $Nombre = null;

    public function getCodigoProcReg(): ?int
    {
        return $this->CodigoProcReg;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): static
    {
        $this->Nombre = $Nombre;

        return $this;
    }
    
}
