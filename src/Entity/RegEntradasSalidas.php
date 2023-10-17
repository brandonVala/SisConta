<?php

namespace App\Entity;

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


}
