<?php

namespace App\Entity;

use App\Repository\UserPlatformRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserPlatformRepository::class)
 */
class UserPlatform
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $publicKey;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secretKey;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="userPlatforms")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Platform::class, inversedBy="userPlatforms")
     */
    private $platform;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $passphrase;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vector;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPublicKey(): ?string
    {
        return $this->publicKey;
    }

    public function setPublicKey(string $publicKey): self
    {
        $this->publicKey = $publicKey;

        return $this;
    }

    public function getSecretKey(): ?string
    {
        return $this->secretKey;
    }

    public function setSecretKey(string $secretKey): self
    {
        $this->secretKey = $secretKey;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getPlatform(): ?Platform
    {
        return $this->platform;
    }

    public function setPlatform(?Platform $platform): self
    {
        $this->platform = $platform;

        return $this;
    }

    public function getPassphrase(): ?string
    {
        return $this->passphrase;
    }

    public function setPassphrase(?string $passphrase): self
    {
        $this->passphrase = $passphrase;

        return $this;
    }

    public function getVector(): ?string
    {
        return $this->vector;
    }

    public function setVector(string $vector): self
    {
        $this->vector = $vector;

        return $this;
    }
}
