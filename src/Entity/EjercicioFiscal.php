<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
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

    public function getIdejercicioFiscal(): ?int
    {
        return $this->idejercicioFiscal;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getMes(): ?string
    {
        return $this->mes;
    }

    public function setMes(string $mes): static
    {
        $this->mes = $mes;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): static
    {
        $this->estado = $estado;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fechaFin;
    }

    public function setFechaFin(\DateTimeInterface $fechaFin): static
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(string $observaciones): static
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getProcReg(): ?ProcedimientoReg
    {
        return $this->procReg;
    }

    public function setProcReg(?ProcedimientoReg $procReg): static
    {
        $this->procReg = $procReg;

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


}
