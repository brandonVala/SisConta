<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="APP", type="string", length=45, nullable=false)
     */
    private $app;

    /**
     * @var string
     *
     * @ORM\Column(name="APM", type="string", length=45, nullable=false)
     */
    private $apm;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=15, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=45, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Contrasena", type="string", length=45, nullable=false)
     */
    private $contrasena;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Empresa", inversedBy="uEmail")
     * @ORM\JoinTable(name="usuarios_empresa",
     *   joinColumns={
     *     @ORM\JoinColumn(name="U_Email", referencedColumnName="Email")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idEmpresa", referencedColumnName="idEmpresa")
     *   }
     * )
     */
    private $idempresa = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idempresa = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
