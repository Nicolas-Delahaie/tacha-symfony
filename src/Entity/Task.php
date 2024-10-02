<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $start_date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $start_time = null;

    #[ORM\Column(length: 50)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?bool $is_hidden = null;

    #[ORM\Column]
    private ?bool $is_achieved = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 3, nullable: true)]
    private ?string $priority = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 3, nullable: true)]
    private ?string $desire = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 3, nullable: true)]
    private ?string $concentration = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 3, nullable: true)]
    private ?string $workload = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 3, nullable: true)]
    private ?string $desired_deadline = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $deadline = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(?\DateTimeInterface $start_date): static
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->start_time;
    }

    public function setStartTime(?\DateTimeInterface $start_time): static
    {
        $this->start_time = $start_time;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
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
        return $this->is_hidden;
    }

    public function setHidden(bool $is_hidden): static
    {
        $this->is_hidden = $is_hidden;

        return $this;
    }

    public function isAchieved(): ?bool
    {
        return $this->is_achieved;
    }

    public function setAchieved(bool $is_achieved): static
    {
        $this->is_achieved = $is_achieved;

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

    public function getDesiredDeadline(): ?string
    {
        return $this->desired_deadline;
    }

    public function setDesiredDeadline(?string $desired_deadline): static
    {
        $this->desired_deadline = $desired_deadline;

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
