<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionCuentas
 *
 * @ORM\Table(name="clasificacion_cuentas", indexes={@ORM\Index(name="fk_clasificacion_cuentas_ClasifPrincipal1_idx", columns={"ClasifPrincipal_id_Recurso"}), @ORM\Index(name="fk_Clasificacion_Cuentas_has_Cuentas_Clasificacion_Cuentas1_idx", columns={"Clasificacion_Cuentas"}), @ORM\Index(name="fk_Clasificacion_Cuentas_has_Cuentas_Cuentas1_idx", columns={"Cuentas_Codigo_Cuenta"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ClasificacionCuentasRepository")
 */
class ClasificacionCuentas
{
    /**
     * @var \Cuentas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Cuentas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Cuentas_Codigo_Cuenta", referencedColumnName="Codigo_Cuenta")
     * })
     */
    private $cuentasCodigoCuenta;

    /**
     * @var \ClasificacionC
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ClasificacionC")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Clasificacion_Cuentas", referencedColumnName="idClasificacion_Cuentas")
     * })
     */
    private $clasificacionCuentas;

    /**
     * @var \Clasifprincipal
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Clasifprincipal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ClasifPrincipal_id_Recurso", referencedColumnName="id_Recurso")
     * })
     */
    private $clasifprincipalIdRecurso;

    public function getCuentasCodigoCuenta(): ?Cuentas
    {
        return $this->cuentasCodigoCuenta;
    }

    public function setCuentasCodigoCuenta(?Cuentas $cuentasCodigoCuenta): static
    {
        $this->cuentasCodigoCuenta = $cuentasCodigoCuenta;

        return $this;
    }

    public function getClasificacionCuentas(): ?ClasificacionC
    {
        return $this->clasificacionCuentas;
    }

    public function setClasificacionCuentas(?ClasificacionC $clasificacionCuentas): static
    {
        $this->clasificacionCuentas = $clasificacionCuentas;

        return $this;
    }

    public function getClasifprincipalIdRecurso(): ?Clasifprincipal
    {
        return $this->clasifprincipalIdRecurso;
    }

    public function setClasifprincipalIdRecurso(?Clasifprincipal $clasifprincipalIdRecurso): static
    {
        $this->clasifprincipalIdRecurso = $clasifprincipalIdRecurso;

        return $this;
    }


}
