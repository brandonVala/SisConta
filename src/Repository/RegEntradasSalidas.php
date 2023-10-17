<?php

namespace App\Entity;

use App\Repository\RegEntradasSalidasRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: RegEntradasSalidasRepository::class)]
class RegEntradasSalidas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "idEntradasSalidas")] 
    private ?int $idEntradasSalidas = null;

    #[ORM\Column(name: "AltaMaterialesCodigo")] 
    private ?string $AltaMaterialesCodigo = null;

    #[ORM\Column(name: "CodigoNaturaleza")]  
    private ?string $CodigoNaturaleza = null;

    #[ORM\Column(name: "CodigoValuacion")]  
    private ?string $codigoValuacion = null;

    #[ORM\Column(name: "EmpresaIdEmpresa")] 
    private ?string $EmpresaIdEmpresa = null;

    #[ORM\Column(name: "FechaReg", type: "date")]
    private ?\DateTimeInterface $fechaReg = null;

    #[ORM\Column(name: "UnidadMedida", length: 20)]
    private ?string $unidadMedida = null;

    #[ORM\Column(name: "Cantidad", type: "float")]
    private ?float $cantidad = null;

    #[ORM\Column(name: "CostoUnitario", type: "float")]
    private ?float $costoUnitario = null;

    #[ORM\Column(name: "Total", type: "float", nullable: true)]
    private ?float $total = null;

    public function getIdEntradasSalidas(): ?string
    {
        return $this->idEntradasSalidas;
    }

    public function getAltaMaterialesCodigo(): ?string
    {
        return $this->AltaMaterialesCodigo;
    }

    public function setAltaMaterialesCodigo(string $AltaMaterialesCodigo): static
    {
        $this->AltaMaterialesCodigo = $AltaMaterialesCodigo;

        return $this;
    }

    public function getCodigoNaturaleza(): ?string
    {
        return $this->CodigoNaturaleza;
    }

    public function setCodigoNaturaleza(string $CodigoNaturaleza): static
    {
        $this->CodigoNaturaleza = $CodigoNaturaleza;

        return $this;
    }

    public function getCodigoValuacion(): ?string
    {
        return $this->codigoValuacion;
    }

    public function setCodigoValuacion(string $codigoValuacion): static
    {
        $this->codigoValuacion = $codigoValuacion;

        return $this;
    }

    public function getEmpresaIdEmpresa(): ?string
    {
        return $this->EmpresaIdEmpresa;
    }

    public function setEmpresaIdEmpresa(string $EmpresaIdEmpresa): static
    {
        $this->EmpresaIdEmpresa = $EmpresaIdEmpresa;

        return $this;
    }

    public function getFechaReg(): ?\DateTimeInterface
    {
        return $this->fechaReg;
    }

    public function setFechaReg(\DateTimeInterface $fechaReg): static
    {
        $this->fechaReg = $fechaReg;

        return $this;
    }

    public function getUnidadMedida(): ?string
    {
        return $this->unidadMedida;
    }

    public function setUnidadMedida(string $unidadMedida): static
    {
        $this->unidadMedida = $unidadMedida;

        return $this;
    }

    public function getCantidad(): ?float
    {
        return $this->cantidad;
    }

    public function setCantidad(float $cantidad): static
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getCostoUnitario(): ?float
    {
        return $this->costoUnitario;
    }

    public function setCostoUnitario(float $costoUnitario): static
    {
        $this->costoUnitario = $costoUnitario;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $total): static
    {
        $this->total = $total;

        return $this;
    }

}
