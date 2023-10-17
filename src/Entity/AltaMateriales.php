<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AltaMateriales
 *
 * @ORM\Table(name="alta_materiales", indexes={@ORM\Index(name="fk_alta_materiales_empresa1_idx", columns={"empresa_idEmpresa"})})
 * @ORM\Entity
 */
class AltaMateriales
{
    /**
     * @var int
     *
     * @ORM\Column(name="Codigo_Materiales", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codigoMateriales;

    /**
     * @var string
     *
     * @ORM\Column(name="Posicion_Financiera", type="string", length=10, nullable=false)
     */
    private $posicionFinanciera;

    /**
     * @var string
     *
     * @ORM\Column(name="Material", type="string", length=100, nullable=false)
     */
    private $material;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=150, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Unidad_Medida", type="string", length=45, nullable=false)
     */
    private $unidadMedida;

    /**
     * @var float
     *
     * @ORM\Column(name="Precio_Unitario", type="float", precision=10, scale=0, nullable=false)
     */
    private $precioUnitario;

    /**
     * @var string
     *
     * @ORM\Column(name="Marca", type="string", length=45, nullable=false)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="Lote", type="string", length=45, nullable=false)
     */
    private $lote;

    /**
     * @var string
     *
     * @ORM\Column(name="Serie", type="string", length=45, nullable=false)
     */
    private $serie;

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

    public function getCodigoMateriales(): ?int
    {
        return $this->codigoMateriales;
    }

    public function getPosicionFinanciera(): ?string
    {
        return $this->posicionFinanciera;
    }

    public function setPosicionFinanciera(string $posicionFinanciera): static
    {
        $this->posicionFinanciera = $posicionFinanciera;

        return $this;
    }

    public function getMaterial(): ?string
    {
        return $this->material;
    }

    public function setMaterial(string $material): static
    {
        $this->material = $material;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getUnidadMedida(): ?string
    {
        return $this->unidadMedida;
    }

    public function setUnidadMedida(string $unidadMedida): static
    {
        $this->unidadMedida = $unidadMedida;

        return $this;
    }

    public function getPrecioUnitario(): ?float
    {
        return $this->precioUnitario;
    }

    public function setPrecioUnitario(float $precioUnitario): static
    {
        $this->precioUnitario = $precioUnitario;

        return $this;
    }

    public function getMarca(): ?string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): static
    {
        $this->marca = $marca;

        return $this;
    }

    public function getLote(): ?string
    {
        return $this->lote;
    }

    public function setLote(string $lote): static
    {
        $this->lote = $lote;

        return $this;
    }

    public function getSerie(): ?string
    {
        return $this->serie;
    }

    public function setSerie(string $serie): static
    {
        $this->serie = $serie;

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
