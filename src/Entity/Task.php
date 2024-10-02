<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startTime = null;

    #[ORM\Column(length: 50)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?bool $isHidden = null;

    #[ORM\Column]
    private ?bool $isAchieved = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 3, nullable: true)]
    private ?string $priority = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 3, nullable: true)]
    private ?string $desire = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 3, nullable: true)]
    private ?string $concentration = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 3, nullable: true)]
    private ?string $workload = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $deadline = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(?\DateTimeInterface $startTime): static
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function isHidden(): ?bool
    {
        return $this->isHidden;
    }
    public function setIsHidden(bool $isHidden): static
    {
        $this->isHidden = $isHidden;

        return $this;
    }

    public function isAchieved(): ?bool
    {
        return $this->isAchieved;
    }

    public function setIsAchieved(bool $isAchieved): static
    {
        $this->isAchieved = $isAchieved;

        return $this;
    }

    public function getPriority(): ?string
    {
        return $this->priority;
    }

    public function setPriority(?string $priority): static
    {
        $this->priority = $priority;

        return $this;
    }

    public function getDesire(): ?string
    {
        return $this->desire;
    }

    public function setDesire(?string $desire): static
    {
        $this->desire = $desire;

        return $this;
    }

    public function getConcentration(): ?string
    {
        return $this->concentration;
    }

    public function setConcentration(?string $concentration): static
    {
        $this->concentration = $concentration;

        return $this;
    }

    public function getWorkload(): ?string
    {
        return $this->workload;
    }

    public function setWorkload(?string $workload): static
    {
        $this->workload = $workload;

        return $this;
    }

    public function getDeadline(): ?\DateTimeInterface
    {
        return $this->deadline;
    }

    public function setDeadline(?\DateTimeInterface $deadline): static
    {
        $this->deadline = $deadline;

        return $this;
    }
}
