<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValuacionInventarios
 *
 * @ORM\Table(name="valuacion_inventarios", indexes={@ORM\Index(name="fk_valuacion_inventarios_empresa1_idx", columns={"empresa_idEmpresa"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ValuacionInventariosRepository")
 * 
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

    public function getCodigovaluacion(): ?int
    {
        return $this->codigovaluacion;
    }

    public function getNombreValuacion(): ?string
    {
        return $this->nombreValuacion;
    }

    public function setNombreValuacion(string $nombreValuacion): static
    {
        $this->nombreValuacion = $nombreValuacion;

        return $this;
    }

    public function getEmpresaIdempresa(): ?Empresa
    {
        return $this->empresaIdempresa;
    }

    public function setEmpresaIdempresa(?Empresa $empresaIdempresa): static
    {
        $this->empresaIdempresa = $empresaIdempresa;

        return $this;
    }


}
