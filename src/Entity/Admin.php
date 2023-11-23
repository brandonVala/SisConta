<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;


/**
 * Admin
 *
 * @ORM\Table(name="admin", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_880E0D76E7927C74", columns={"email"})})
 * @ORM\Entity
 */
class Admin implements UserInterface, PasswordAuthenticatedUserInterface
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
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

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

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    
    public function setEmail(string $email): void
        {
            $this->email = $email;
        }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_ADMIN';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    

}