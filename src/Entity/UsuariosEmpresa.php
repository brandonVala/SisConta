<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios_empresa", schema="temp_schema")
 * @ORM\Entity(repositoryClass="App\Repository\UsuariosEmpresaRepository")
 */
class UsuariosEmpresa
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=45)
     */
    private $U_Email;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Empresa")
     * @ORM\JoinColumn(name="idEmpresa", referencedColumnName="idEmpresa")
     */
    private $empresa;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuarios")
     * @ORM\JoinColumn(name="U_Email", referencedColumnName="Email")
     */
    private $usuario;

    // Getter and Setter methods for U_Email, empresa, and usuario

    public function getU_Email()
    {
        return $this->U_Email;
    }

    public function setU_Email($U_Email)
    {
        $this->U_Email = $U_Email;
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getUEmail(): ?string
    {
        return $this->U_Email;
    }
}
