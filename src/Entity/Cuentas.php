<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentas
 *
 * @ORM\Table(name="cuentas")
 * @ORM\Entity
 */
class Cuentas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Codigo_Cuenta", type="string", length=45, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigoCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Cuenta", type="string", length=45, nullable=false)
     */
    private $nombreCuenta;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProcedimientoReg", mappedBy="codigoCuenta")
     */
    private $codigoProcReg = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codigoProcReg = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
