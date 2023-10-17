<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProcedimientoReg
 *
 * @ORM\Table(name="procedimiento_reg")
 * @ORM\Entity
 */
class ProcedimientoReg
{
    /**
     * @var int
     *
     * @ORM\Column(name="Codigo_Proc_Reg", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigoProcReg;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Cuentas", inversedBy="codigoProcReg")
     * @ORM\JoinTable(name="cuentas_proc_reg",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Codigo_Proc_Reg", referencedColumnName="Codigo_Proc_Reg")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Codigo_Cuenta", referencedColumnName="Codigo_Cuenta")
     *   }
     * )
     */
    private $codigoCuenta = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codigoCuenta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getCodigoProcReg(): ?int
    {
        return $this->codigoProcReg;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return Collection<int, Cuentas>
     */
    public function getCodigoCuenta(): Collection
    {
        return $this->codigoCuenta;
    }

    public function addCodigoCuentum(Cuentas $codigoCuentum): static
    {
        if (!$this->codigoCuenta->contains($codigoCuentum)) {
            $this->codigoCuenta->add($codigoCuentum);
        }

        return $this;
    }

    public function removeCodigoCuentum(Cuentas $codigoCuentum): static
    {
        $this->codigoCuenta->removeElement($codigoCuentum);

        return $this;
    }

}
