<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EjercicioFiscal
 *
 * @ORM\Table(name="ejercicio_fiscal", indexes={@ORM\Index(name="fk_Ejercicio_Fiscal_Empresa1_idx", columns={"Empresa_idEmpresa"}), @ORM\Index(name="fk_Ejercicio_Fiscal_Procedimiento_Reg1_idx", columns={"Proc_Reg"})})
 * @ORM\Entity
 */
class EjercicioFiscal
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEjercicio_Fiscal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idejercicioFiscal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Mes", type="string", length=30, nullable=false)
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=15, nullable=false)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Fin", type="date", nullable=false)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=255, nullable=false)
     */
    private $observaciones;

    /**
     * @var \ProcedimientoReg
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ProcedimientoReg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Proc_Reg", referencedColumnName="Codigo_Proc_Reg")
     * })
     */
    private $procReg;

    /**
     * @var \Empresa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Empresa_idEmpresa", referencedColumnName="idEmpresa")
     * })
     */
    private $empresaIdempresa;


}
