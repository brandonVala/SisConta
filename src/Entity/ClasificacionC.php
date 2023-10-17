<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionC
 *
 * @ORM\Table(name="clasificacion_c")
 * @ORM\Entity
 */
class ClasificacionC
{
    /**
     * @var int
     *
     * @ORM\Column(name="idClasificacion_Cuentas", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclasificacionCuentas;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Clasificacion", type="string", length=45, nullable=false)
     */
    private $nombreClasificacion;


}
