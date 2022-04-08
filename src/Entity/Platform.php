<?php

namespace App\Entity;

use App\Repository\PlatformRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlatformRepository::class)
 */
class Platform
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=UserPlatform::class, mappedBy="platform")
     */
    private $userPlatforms;

    public function __construct()
    {
        $this->userPlatforms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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
            $userPlatform->setPlatform($this);
        }

        return $this;
    }

    public function removeUserPlatform(UserPlatform $userPlatform): self
    {
        if ($this->userPlatforms->removeElement($userPlatform)) {
            // set the owning side to null (unless already changed)
            if ($userPlatform->getPlatform() === $this) {
                $userPlatform->setPlatform(null);
            }
        }

        return $this;
    }
}
