<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * RegEntradasSalidas
 *
 * @ORM\Table(name="reg_entradas_salidas", indexes={@ORM\Index(name="fk_reg_entradas_salidas_empresa1_idx", columns={"empresa_idEmpresa"}), @ORM\Index(name="fk_reg_entradas_salidas_alta_materiales1_idx", columns={"altaMateriales_Codigo"}), @ORM\Index(name="fk_reg_entradas_salidas_naturaleza1_idx", columns={"Codigo_Naturaleza"}), @ORM\Index(name="fk_reg_entradas_salidas_valuacion_inventarios1_idx", columns={"CodigoValuacion"})})
 * @ORM\Entity
 */
class RegEntradasSalidas
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDentradas_salidas", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $identradasSalidas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Reg", type="date", nullable=false)
     */
    private $fechaReg;

    /**
     * @var string
     *
     * @ORM\Column(name="Unidad_Medida", type="string", length=20, nullable=false)
     */
    private $unidadMedida;

    /**
     * @var float
     *
     * @ORM\Column(name="Cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="Costo_Unitario", type="float", precision=10, scale=0, nullable=false)
     */
    private $costoUnitario;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total;

    /**
     * @var \ValuacionInventarios
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ValuacionInventarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodigoValuacion", referencedColumnName="CodigoValuacion")
     * })
     */
    private $codigovaluacion;

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
     * @var \Empresa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresa_idEmpresa", referencedColumnName="idEmpresa")
     * })
     */
    private $empresaIdempresa;

    /**
     * @var \AltaMateriales
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AltaMateriales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="altaMateriales_Codigo", referencedColumnName="Codigo_Materiales")
     * })
     */
    private $altamaterialesCodigo;

    public function getIdentradasSalidas(): ?int
    {
        return $this->identradasSalidas;
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

    public function getCodigovaluacion(): ?ValuacionInventarios
    {
        return $this->codigovaluacion;
    }

    public function setCodigovaluacion(?ValuacionInventarios $codigovaluacion): static
    {
        $this->codigovaluacion = $codigovaluacion;

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

    public function getEmpresaIdempresa(): ?Empresa
    {
        return $this->empresaIdempresa;
    }

    public function setEmpresaIdempresa(?Empresa $empresaIdempresa): static
    {
        $this->empresaIdempresa = $empresaIdempresa;

        return $this;
    }

    public function getAltamaterialesCodigo(): ?AltaMateriales
    {
        return $this->altamaterialesCodigo;
    }

    public function setAltamaterialesCodigo(?AltaMateriales $altamaterialesCodigo): static
    {
        $this->altamaterialesCodigo = $altamaterialesCodigo;

        return $this;
    }


}
