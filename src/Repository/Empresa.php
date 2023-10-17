<?php

namespace App\Entity;

use App\Repository\EmpresaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: EmpresaRepository::class)]
class Empresa
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "idEmpresa", type: "integer")]
    private ?int $idEmpresa = null;

    #[ORM\Column(name: "Nombre", length: 45)]
    private ?string $Nombre = null;

    #[ORM\Column(name: "Direccion", length: 45)]
    private ?string $Direccion = null;

    #[ORM\Column(name: "Telefono", length: 45)]
    private ?string $Telefono = null;

    #[ORM\Column(name: "Giro", length: 45)]
    private ?string $Giro = null;

    #[ORM\Column(name: "RFC", length: 45)]
    private ?string $RFC = null;

    #[ORM\ManyToOne(targetEntity: AltaMateriales::class)]
    #[ORM\JoinColumn(name: "AltaMaterialesCodigo", referencedColumnName: "CodigoMateriales")]
    private ?AltaMateriales $AltaMateriales;

    #[ORM\ManyToOne(targetEntity: UsuariosEmpresa::class)]
    #[ORM\JoinColumn(name: "EmpresaIdEmpresa", referencedColumnName: "idEmpresa")]
    private ?UsuariosEmpresa $UsuariosEmpresas;

    public function __construct()
    {
        $this->altaMateriales = new ArrayCollection();
        $this->usuariosEmpresas = new ArrayCollection();
    }

    public function getIdEmpresa(): ?int
    {
        return $this->idEmpresa;
    }

    // Getters and setters for other properties...

    /**
     * @return Collection|AltaMateriales[]
     */
    public function getAltaMateriales(): Collection
    {
        return $this->altaMateriales;
    }

    public function addAltaMateriales(AltaMateriales $altaMateriales): self
    {
        if (!$this->altaMateriales->contains($altaMateriales)) {
            $this->altaMateriales[] = $altaMateriales;
            $altaMateriales->setEmpresa($this);
        }

        return $this;
    }

    public function removeAltaMateriales(AltaMateriales $altaMateriales): self
    {
        if ($this->altaMateriales->removeElement($altaMateriales)) {
            // set the owning side to null (unless already changed)
            if ($altaMateriales->getEmpresa() === $this) {
                $altaMateriales->setEmpresa(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|UsuariosEmpresa[]
     */
    public function getUsuariosEmpresas(): Collection
    {
        return $this->usuariosEmpresas;
    }

    public function addUsuariosEmpresa(UsuariosEmpresa $usuariosEmpresa): self
    {
        if (!$this->usuariosEmpresas->contains($usuariosEmpresa)) {
            $this->usuariosEmpresas[] = $usuariosEmpresa;
            $usuariosEmpresa->setEmpresa($this);
        }

        return $this;
    }

    public function removeUsuariosEmpresa(UsuariosEmpresa $usuariosEmpresa): self
    {
        if ($this->usuariosEmpresas->removeElement($usuariosEmpresa)) {
            // set the owning side to null (unless already changed)
            if ($usuariosEmpresa->getEmpresa() === $this) {
                $usuariosEmpresa->setEmpresa(null);
            }
        }

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): static
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->Direccion;
    }

    public function setDireccion(string $Direccion): static
    {
        $this->Direccion = $Direccion;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }

    public function setTelefono(string $Telefono): static
    {
        $this->Telefono = $Telefono;

        return $this;
    }

    public function getGiro(): ?string
    {
        return $this->Giro;
    }

    public function setGiro(string $Giro): static
    {
        $this->Giro = $Giro;

        return $this;
    }

    public function getRFC(): ?string
    {
        return $this->RFC;
    }

    public function setRFC(string $RFC): static
    {
        $this->RFC = $RFC;

        return $this;
    }

    public function setAltaMateriales(?AltaMateriales $AltaMateriales): static
    {
        $this->AltaMateriales = $AltaMateriales;

        return $this;
    }

    public function setUsuariosEmpresas(?UsuariosEmpresa $UsuariosEmpresas): static
    {
        $this->UsuariosEmpresas = $UsuariosEmpresas;

        return $this;
    }
}
