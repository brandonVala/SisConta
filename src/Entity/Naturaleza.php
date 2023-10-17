<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Naturaleza
 *
 * @ORM\Table(name="naturaleza")
 * @ORM\Entity
 */
class Naturaleza
{
    /**
     * @var int
     *
     * @ORM\Column(name="Codigo_Naturaleza", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigoNaturaleza;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Naturaleza", type="string", length=45, nullable=false)
     */
    private $tipoNaturaleza;


}
