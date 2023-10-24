<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Naturaleza
 *
 * @ORM\Table(name="naturaleza")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\NaturalezaRepository")
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

    public function getCodigoNaturaleza(): ?int
    {
        return $this->codigoNaturaleza;
    }

    public function getTipoNaturaleza(): ?string
    {
        return $this->tipoNaturaleza;
    }

    public function setTipoNaturaleza(string $tipoNaturaleza): static
    {
        $this->tipoNaturaleza = $tipoNaturaleza;

        return $this;
    }


}
