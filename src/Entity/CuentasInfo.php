<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuentasInfo
 *
 * @ORM\Table(name="cuentas_info", indexes={@ORM\Index(name="fk_Cuentas_Info_Procedimiento_Reg1_idx", columns={"Codigo_Proc_Reg"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CuentasInfoRepository")
 */
class CuentasInfo
{
    /**
     * @var int
     *
     * @ORM\Column(name="Codigo_Cuenta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codigoCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Cuenta", type="string", length=45, nullable=false)
     */
    private $nombreCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Recurso", type="string", length=25, nullable=false)
     */
    private $tipoRecurso;

    /**
     * @var \ProcedimientoReg
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ProcedimientoReg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Codigo_Proc_Reg", referencedColumnName="Codigo_Proc_Reg")
     * })
     */
    private $codigoProcReg;

    public function getCodigoCuenta(): ?int
    {
        return $this->codigoCuenta;
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

    public function getTipoRecurso(): ?string
    {
        return $this->tipoRecurso;
    }

    public function setTipoRecurso(string $tipoRecurso): static
    {
        $this->tipoRecurso = $tipoRecurso;

        return $this;
    }

    public function getCodigoProcReg(): ?ProcedimientoReg
    {
        return $this->codigoProcReg;
    }

    public function setCodigoProcReg(?ProcedimientoReg $codigoProcReg): static
    {
        $this->codigoProcReg = $codigoProcReg;

        return $this;
    }


}
