<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionCuentas
 *
 * @ORM\Table(name="clasificacion_cuentas", indexes={@ORM\Index(name="fk_Clasificacion_Cuentas_has_Cuentas_Cuentas1_idx", columns={"Cuentas_Codigo_Cuenta"}), @ORM\Index(name="fk_Clasificacion_Cuentas_has_Cuentas_Clasificacion_Cuentas1_idx", columns={"Clasificacion_Cuentas"}), @ORM\Index(name="fk_clasificacion_cuentas_ClasifPrincipal1_idx", columns={"ClasifPrincipal_id_Recurso"})})
 * @ORM\Entity
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


}
