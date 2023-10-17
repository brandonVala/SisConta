<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    public function getCodigoCuenta(): ?string
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

    /**
     * @return Collection<int, ProcedimientoReg>
     */
    public function getCodigoProcReg(): Collection
    {
        return $this->codigoProcReg;
    }

    public function addCodigoProcReg(ProcedimientoReg $codigoProcReg): static
    {
        if (!$this->codigoProcReg->contains($codigoProcReg)) {
            $this->codigoProcReg->add($codigoProcReg);
            $codigoProcReg->addCodigoCuentum($this);
        }

        return $this;
    }

    public function removeCodigoProcReg(ProcedimientoReg $codigoProcReg): static
    {
        if ($this->codigoProcReg->removeElement($codigoProcReg)) {
            $codigoProcReg->removeCodigoCuentum($this);
        }

        return $this;
    }

}
