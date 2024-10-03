<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(options: ["default" => 'CURRENT_TIMESTAMP']) ]
    private ?\DateTimeImmutable $createdAt = null;

    /**
     * @var Collection<int, Tag>
     */
    #[ORM\OneToMany(targetEntity: Tag::class, mappedBy: 'creator', orphanRemoval: true)]
    private Collection $tags;

    /**
     * @var Collection<int, Workspace>
     */
    #[ORM\OneToMany(targetEntity: Workspace::class, mappedBy: 'owner', orphanRemoval: true)]
    private Collection $workspaces;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->workspaces = new ArrayCollection();
    }

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection<int, Tag>
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): static
    {
        if (!$this->tags->contains($tag)) {
            $this->tags->add($tag);
            $tag->setCreator($this);
        }

        return $this;
    }

    public function removeTag(Tag $tag): static
    {
        if ($this->tags->removeElement($tag)) {
            // set the owning side to null (unless already changed)
            if ($tag->getCreator() === $this) {
                $tag->setCreator(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Workspace>
     */
    public function getWorkspaces(): Collection
    {
        return $this->workspaces;
    }

    public function addWorkspace(Workspace $workspace): static
    {
        if (!$this->workspaces->contains($workspace)) {
            $this->workspaces->add($workspace);
            $workspace->setOwner($this);
        }

        return $this;
    }

    public function removeWorkspace(Workspace $workspace): static
    {
        if ($this->workspaces->removeElement($workspace)) {
            // set the owning side to null (unless already changed)
            if ($workspace->getOwner() === $this) {
                $workspace->setOwner(null);
            }
        }

        return $this;
    }
}
