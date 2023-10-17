<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clasifprincipal
 *
 * @ORM\Table(name="clasifprincipal")
 * @ORM\Entity
 */
class Clasifprincipal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Recurso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRecurso;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Recurso", type="string", length=45, nullable=false)
     */
    private $nombreRecurso;


}
