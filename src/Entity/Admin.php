<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Admin
 *
 * @ORM\Table(name="admin", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_880E0D76E7927C74", columns={"email"})})
 * @ORM\Entity
 */
class Admin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=180, nullable=false)
     */
    private $email;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="json", nullable=false)
     */
    private $roles;

    /**
     * @var ArrayCollection|Collection|Usuarios[]
     *
     * @ORM\OneToMany(targetEntity="Usuarios", mappedBy="admin")
     */
    private $usuarios;

    public function __construct()
    {
        $this->usuarios = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|Collection|Usuarios[]
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }

    public function addUsuario(Usuarios $usuario)
    {
        if (!$this->usuarios->contains($usuario)) {
            $this->usuarios->add($usuario);
        }
    }

    public function removeUsuario(Usuarios $usuario)
    {
        $this->usuarios->removeElement($usuario);
    }


    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }


}