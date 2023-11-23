<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionCuentas
 *
 * @ORM\Table(name="clasificacion_cuentas", indexes={@ORM\Index(name="fk_clasificacion_cuentas_ClasifPrincipal1_idx", columns={"ClasifPrincipal_id_Recurso"}), @ORM\Index(name="fk_Clasificacion_Cuentas_has_Cuentas_Clasificacion_Cuentas1_idx", columns={"Clasificacion_Cuentas"}), @ORM\Index(name="fk_Clasificacion_Cuentas_has_Cuentas_Cuentas_Cuentas1_idx", columns={"Cuentas_Codigo_Cuenta"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ClasificacionCuentasRepository")
 */
class ClasificacionCuentas
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO") // Use AUTO for auto-increment primary key
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var \Cuentas
     *
     * @ORM\OneToOne(targetEntity="Cuentas")
     * @ORM\JoinColumn(name="Cuentas_Codigo_Cuenta", referencedColumnName="Codigo_Cuenta")
     */
    private $cuentasCodigoCuenta;

    /**
     * @var \ClasificacionC
     *
     * @ORM\OneToOne(targetEntity="ClasificacionC")
     * @ORM\JoinColumn(name="Clasificacion_Cuentas", referencedColumnName="idClasificacion_Cuentas")
     */
    private $clasificacionCuentas;

    /**
     * @var \Clasifprincipal
     *
     * @ORM\OneToOne(targetEntity="Clasifprincipal")
     * @ORM\JoinColumn(name="ClasifPrincipal_id_Recurso", referencedColumnName="id_Recurso")
     */
    private $clasifprincipalIdRecurso;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCuentasCodigoCuenta(): ?Cuentas
    {
        return $this->cuentasCodigoCuenta;
    }

    public function setCuentasCodigoCuenta(?Cuentas $cuentasCodigoCuenta): self
    {
        $this->cuentasCodigoCuenta = $cuentasCodigoCuenta;

        return $this;
    }

    public function getClasificacionCuentas(): ?ClasificacionC
    {
        return $this->clasificacionCuentas;
    }

    public function setClasificacionCuentas(?ClasificacionC $clasificacionCuentas): self
    {
        $this->clasificacionCuentas = $clasificacionCuentas;

        return $this;
    }

    public function getClasifprincipalIdRecurso(): ?Clasifprincipal
    {
        return $this->clasifprincipalIdRecurso;
    }

    public function setClasifprincipalIdRecurso(?Clasifprincipal $clasifprincipalIdRecurso): self
    {
        $this->clasifprincipalIdRecurso = $clasifprincipalIdRecurso;

        return $this;
    }

    public function getNombreCuenta()
    {
        return $this->cuentasCodigoCuenta ? $this->cuentasCodigoCuenta->getNombreCuenta() : null;
    }

    public function getNombreClasificacion()
    {
        return $this->clasificacionCuentas ? $this->clasificacionCuentas->getNombreClasificacion() : null;
    }

    public function getNombreRecurso()
    {
        return $this->clasifprincipalIdRecurso ? $this->clasifprincipalIdRecurso->getNombreRecurso() : null;
    }
}
