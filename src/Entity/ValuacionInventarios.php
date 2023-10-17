<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValuacionInventarios
 *
 * @ORM\Table(name="valuacion_inventarios", indexes={@ORM\Index(name="fk_valuacion_inventarios_empresa1_idx", columns={"empresa_idEmpresa"})})
 * @ORM\Entity
 */
class ValuacionInventarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="CodigoValuacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codigovaluacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Valuacion", type="string", length=20, nullable=false)
     */
    private $nombreValuacion;

    /**
     * @var \Empresa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresa_idEmpresa", referencedColumnName="idEmpresa")
     * })
     */
    private $empresaIdempresa;


}
