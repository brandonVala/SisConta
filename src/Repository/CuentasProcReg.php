<?php

namespace App\Entity;

use App\Repository\CuentasProcRegRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CuentasProcRegRepository::class)]
class CuentasProcReg
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(name: "CodigoCuenta", type: "integer")]
    private ?int $CodigoCuenta;

    #[ORM\Column(name: "CodigoProcReg", type: "integer")]
    private ?int $CodigoProcReg;


    public function getCodigoCuenta(): ?int
    {
        return $this->CodigoCuenta;
    }

    public function getCodigoProcReg(): ?int
    {
        return $this->CodigoProcReg;
    }

    public function setCuenta($cuenta): self
    {
        $this->cuenta = $cuenta;
        return $this;
    }

    public function getCuenta()
    {
        return $this->cuenta;
    }

    public function setProcedimientoReg($procedimientoReg): self
    {
        $this->procedimientoReg = $procedimientoReg;
        return $this;
    }

    public function getProcedimientoReg()
    {
        return $this->procedimientoReg;
    }
}
