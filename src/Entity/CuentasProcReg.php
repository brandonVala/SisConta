<?php

namespace App\Entity;
// src/Entity/CuentasProcReg.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuentasProcReg
 * 
 * @ORM\Entity
 * @ORM\Table(name="cuentas_proc_reg", schema="temp_schema")
 * @ORM\Entity(repositoryClass="App\Repository\CuentasProcRegRepository")
 */
class CuentasProcReg
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\ProcedimientoReg")
     * @ORM\JoinColumn(name="Codigo_Proc_Reg", referencedColumnName="Codigo_Proc_Reg")
     */
    private $procedimientoReg;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=45)
     * @ORM\JoinColumn(name="Codigo_Cuenta", referencedColumnName="Codigo_Cuenta")
     */
    private $codigoCuenta;

    public function getProcedimientoReg()
    {
        return $this->procedimientoReg;
    }

    public function setProcedimientoReg($procedimientoReg)
    {
        $this->procedimientoReg = $procedimientoReg;
    }

    public function getCodigoCuenta()
    {
        return $this->codigoCuenta;
    }

    public function setCodigoCuenta($codigoCuenta)
    {
        $this->codigoCuenta = $codigoCuenta;
    }
}
