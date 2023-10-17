<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEmpresa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=45, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=45, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Giro", type="string", length=45, nullable=false)
     */
    private $giro;

    /**
     * @var string
     *
     * @ORM\Column(name="RFC", type="string", length=45, nullable=false)
     */
    private $rfc;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Usuarios", mappedBy="idempresa")
     */
    private $uEmail = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->uEmail = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdempresa(): ?int
    {
        return $this->idempresa;
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

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): static
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): static
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getGiro(): ?string
    {
        return $this->giro;
    }

    public function setGiro(string $giro): static
    {
        $this->giro = $giro;

        return $this;
    }

    public function getRfc(): ?string
    {
        return $this->rfc;
    }

    public function setRfc(string $rfc): static
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * @return Collection<int, Usuarios>
     */
    public function getUEmail(): Collection
    {
        return $this->uEmail;
    }

    public function addUEmail(Usuarios $uEmail): static
    {
        if (!$this->uEmail->contains($uEmail)) {
            $this->uEmail->add($uEmail);
            $uEmail->addIdempresa($this);
        }

        return $this;
    }

    public function removeUEmail(Usuarios $uEmail): static
    {
        if ($this->uEmail->removeElement($uEmail)) {
            $uEmail->removeIdempresa($this);
        }

        return $this;
    }

}
