<?php

namespace App\Entity;

use App\Repository\RegCuentasRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: RegCuentasRepository::class)]
class RegCuentas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "idRegCuentas", type: "integer", nullable: false)]
    private ?int $idRegCuentas;


    #[ORM\Column(type: 'integer')]
    private ?int $NumPoliza;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $FechaFactura;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $FechaReg;

    #[ORM\Column(length: 50)]
    private ?string $NombreCuenta;

    #[ORM\Column(length: 100)]
    private ?string $Concepto;

    #[ORM\Column(type: 'float')]
    private ?float $Monto;

    public function getIdRegCuentas(): ?int
    {
        return $this->idRegCuentas;
    }

    public function getNaturaleza(): ?Naturaleza
    {
        return $this->naturaleza;
    }

    public function setNaturaleza(?Naturaleza $naturaleza): self
    {
        $this->naturaleza = $naturaleza;

        return $this;
    }

    public function getCuentas(): ?Cuentas
    {
        return $this->cuentas;
    }

    public function setCuentas(?Cuentas $cuentas): self
    {
        $this->cuentas = $cuentas;

        return $this;
    }

    public function getEjercicioFiscal(): ?EjercicioFiscal
    {
        return $this->ejercicioFiscal;
    }

    public function setEjercicioFiscal(?EjercicioFiscal $ejercicioFiscal): self
    {
        $this->ejercicioFiscal = $ejercicioFiscal;

        return $this;
    }


    public function getNumPoliza(): ?int
    {
        return $this->NumPoliza;
    }

    public function setNumPoliza(int $NumPoliza): static
    {
        $this->NumPoliza = $NumPoliza;

        return $this;
    }

    public function getFechaFactura(): ?\DateTimeInterface
    {
        return $this->FechaFactura;
    }

    public function setFechaFactura(\DateTimeInterface $FechaFactura): static
    {
        $this->FechaFactura = $FechaFactura;

        return $this;
    }

    public function getFechaReg(): ?\DateTimeInterface
    {
        return $this->FechaReg;
    }

    public function setFechaReg(\DateTimeInterface $FechaReg): static
    {
        $this->FechaReg = $FechaReg;

        return $this;
    }

    public function getNombreCuenta(): ?string
    {
        return $this->NombreCuenta;
    }

    public function setNombreCuenta(string $NombreCuenta): static
    {
        $this->NombreCuenta = $NombreCuenta;

        return $this;
    }

    public function getConcepto(): ?string
    {
        return $this->Concepto;
    }

    public function setConcepto(string $Concepto): static
    {
        $this->Concepto = $Concepto;

        return $this;
    }

    public function getMonto(): ?float
    {
        return $this->Monto;
    }

    public function setMonto(float $Monto): static
    {
        $this->Monto = $Monto;

        return $this;
    }

}
