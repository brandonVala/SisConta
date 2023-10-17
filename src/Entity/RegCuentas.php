<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * RegCuentas
 *
 * @ORM\Table(name="reg_cuentas", indexes={@ORM\Index(name="fk_reg_cuentas_cuentas1_idx", columns={"cuentas_Codigo_Cuenta"}), @ORM\Index(name="fk_reg_cuentas_ejercicio_fiscal1_idx", columns={"ejer_idEjercicio_Fiscal"}), @ORM\Index(name="fk_Reg_Cuentas_Naturaleza1_idx", columns={"Codigo_Naturaleza"})})
 * @ORM\Entity
 */
class RegCuentas
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReg_Cuentas", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idregCuentas;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Poliza", type="integer", nullable=false)
     */
    private $numPoliza;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Factura", type="date", nullable=false)
     */
    private $fechaFactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Reg", type="date", nullable=false)
     */
    private $fechaReg;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Cuenta", type="string", length=50, nullable=false)
     */
    private $nombreCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Concepto", type="string", length=100, nullable=false)
     */
    private $concepto;

    /**
     * @var float
     *
     * @ORM\Column(name="Monto", type="float", precision=10, scale=0, nullable=false)
     */
    private $monto;

    /**
     * @var \Cuentas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Cuentas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cuentas_Codigo_Cuenta", referencedColumnName="Codigo_Cuenta")
     * })
     */
    private $cuentasCodigoCuenta;

    /**
     * @var \Naturaleza
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Naturaleza")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Codigo_Naturaleza", referencedColumnName="Codigo_Naturaleza")
     * })
     */
    private $codigoNaturaleza;

    /**
     * @var \EjercicioFiscal
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="EjercicioFiscal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ejer_idEjercicio_Fiscal", referencedColumnName="idEjercicio_Fiscal")
     * })
     */
    private $ejerIdejercicioFiscal;

    public function getIdregCuentas(): ?int
    {
        return $this->idregCuentas;
    }

    public function getNumPoliza(): ?int
    {
        return $this->numPoliza;
    }

    public function setNumPoliza(int $numPoliza): static
    {
        $this->numPoliza = $numPoliza;

        return $this;
    }

    public function getFechaFactura(): ?\DateTimeInterface
    {
        return $this->fechaFactura;
    }

    public function setFechaFactura(\DateTimeInterface $fechaFactura): static
    {
        $this->fechaFactura = $fechaFactura;

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

    public function getNombreCuenta(): ?string
    {
        return $this->nombreCuenta;
    }

    public function setNombreCuenta(string $nombreCuenta): static
    {
        $this->nombreCuenta = $nombreCuenta;

        return $this;
    }

    public function getConcepto(): ?string
    {
        return $this->concepto;
    }

    public function setConcepto(string $concepto): static
    {
        $this->concepto = $concepto;

        return $this;
    }

    public function getMonto(): ?float
    {
        return $this->monto;
    }

    public function setMonto(float $monto): static
    {
        $this->monto = $monto;

        return $this;
    }

    public function getCuentasCodigoCuenta(): ?Cuentas
    {
        return $this->cuentasCodigoCuenta;
    }

    public function setCuentasCodigoCuenta(?Cuentas $cuentasCodigoCuenta): static
    {
        $this->cuentasCodigoCuenta = $cuentasCodigoCuenta;

        return $this;
    }

    public function getCodigoNaturaleza(): ?Naturaleza
    {
        return $this->codigoNaturaleza;
    }

    public function setCodigoNaturaleza(?Naturaleza $codigoNaturaleza): static
    {
        $this->codigoNaturaleza = $codigoNaturaleza;

        return $this;
    }

    public function getEjerIdejercicioFiscal(): ?EjercicioFiscal
    {
        return $this->ejerIdejercicioFiscal;
    }

    public function setEjerIdejercicioFiscal(?EjercicioFiscal $ejerIdejercicioFiscal): static
    {
        $this->ejerIdejercicioFiscal = $ejerIdejercicioFiscal;

        return $this;
    }


}
