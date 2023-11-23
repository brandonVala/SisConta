<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios",
 *     uniqueConstraints={
 *         @ORM\UniqueConstraint(name="unique_email", columns={"Email"})
 *     }
 * )
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\UsuariosRepository")
 */
class Usuarios implements UserInterface, PasswordAuthenticatedUserInterface
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

     /**
     * Plain password used for registration, not persisted in the database
     */
    private $plainPassword;

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(string $plainPassword): self
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Admin")
     * @ORM\JoinColumn(name="admin_id", referencedColumnName="id")
     */
    private $admin;

    
    public function getAdmin()
    {
        return $this->admin;
    }

    public function setAdmin(Admin $admin)
    {
        $this->admin = $admin;
    }



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


    public function getId(): ?int
    {
        return $this->id;
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

    public function setEmail(string $email): self
    {
        $this->email = $email;

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
        $roles[] = 'ROLE_USER';

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
