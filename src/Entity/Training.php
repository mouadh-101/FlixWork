<?php

namespace App\Entity;

use App\Repository\TrainingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrainingRepository::class)]
class Training
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 500)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $start_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $end_date = null;

    #[ORM\Column]
    private ?int $number_of_places = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?user $trainer = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?trainingCategory $category = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): static
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): static
    {
        $this->end_date = $end_date;

        return $this;
    }

    public function getNumberOfPlaces(): ?int
    {
        return $this->number_of_places;
    }

    public function setNumberOfPlaces(int $number_of_places): static
    {
        $this->number_of_places = $number_of_places;

        return $this;
    }

    public function getTrainer(): ?user
    {
        return $this->trainer;
    }

    public function setTrainer(?user $trainer): static
    {
        $this->trainer = $trainer;

        return $this;
    }

    public function getCategory(): ?trainingCategory
    {
        return $this->category;
    }

    public function setCategory(?trainingCategory $category): static
    {
        $this->category = $category;

        return $this;
    }
}
