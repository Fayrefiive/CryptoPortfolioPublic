<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
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
     * @ORM\Column(type="string", length=32)
     */
    private $pseudo;

    /**
     * @ORM\OneToMany(targetEntity=UserPlatform::class, mappedBy="user")
     */
    private $userPlatforms;

    /**
     * @ORM\ManyToOne(targetEntity=Currency::class, cascade={"persist", "remove"})
     */
    private $primary_currency;

    /**
     * @ORM\ManyToOne(targetEntity=Currency::class, cascade={"persist", "remove"})
     */
    private $secondary_currency;

    /**
     * @ORM\Column(type="date")
     */
    private $register;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $last_connexion;

    public function __construct()
    {
        $this->userPlatforms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
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
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * @return Collection|UserPlatform[]
     */
    public function getUserPlatforms(): Collection
    {
        return $this->userPlatforms;
    }

    public function addUserPlatform(UserPlatform $userPlatform): self
    {
        if (!$this->userPlatforms->contains($userPlatform)) {
            $this->userPlatforms[] = $userPlatform;
            $userPlatform->setUser($this);
        }

        return $this;
    }

    public function removeUserPlatform(UserPlatform $userPlatform): self
    {
        if ($this->userPlatforms->removeElement($userPlatform)) {
            // set the owning side to null (unless already changed)
            if ($userPlatform->getUser() === $this) {
                $userPlatform->setUser(null);
            }
        }

        return $this;
    }

    public function getPrimaryCurrency(): ?Currency
    {
        return $this->primary_currency;
    }

    public function setPrimaryCurrency(?Currency $primary_currency): self
    {
        $this->primary_currency = $primary_currency;

        return $this;
    }

    public function getSecondaryCurrency(): ?Currency
    {
        return $this->secondary_currency;
    }

    public function setSecondaryCurrency(?Currency $secondary_currency): self
    {
        $this->secondary_currency = $secondary_currency;

        return $this;
    }

    public function getRegister(): ?\DateTimeInterface
    {
        return $this->register;
    }

    public function setRegister(\DateTimeInterface $register): self
    {
        $this->register = $register;

        return $this;
    }

    public function getLastConnexion(): ?\DateTimeInterface
    {
        return $this->last_connexion;
    }

    public function setLastConnexion(\DateTimeInterface $last_connexion): self
    {
        $this->last_connexion = $last_connexion;

        return $this;
    }
}
