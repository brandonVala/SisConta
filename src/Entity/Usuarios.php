<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApp(): ?string
    {
        return $this->app;
    }

    public function setApp(string $app): static
    {
        $this->app = $app;

        return $this;
    }

    public function getApm(): ?string
    {
        return $this->apm;
    }

    public function setApm(string $apm): static
    {
        $this->apm = $apm;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getContrasena(): ?string
    {
        return $this->contrasena;
    }

    public function setContrasena(string $contrasena): static
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * @return Collection<int, Empresa>
     */
    public function getIdempresa(): Collection
    {
        return $this->idempresa;
    }

    public function addIdempresa(Empresa $idempresa): static
    {
        if (!$this->idempresa->contains($idempresa)) {
            $this->idempresa->add($idempresa);
        }

        return $this;
    }

    public function removeIdempresa(Empresa $idempresa): static
    {
        $this->idempresa->removeElement($idempresa);

        return $this;
    }

}
