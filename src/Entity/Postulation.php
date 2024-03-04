<?php

namespace App\Entity;

use App\Repository\PostulationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostulationRepository::class)]
class Postulation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $postulation_date = null;

    #[ORM\Column(length: 500)]
    private ?string $cover_letter = null;

    #[ORM\Column(length: 50)]
    private ?string $etat = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?freelancer $freelancer = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?job $job = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostulationDate(): ?\DateTimeInterface
    {
        return $this->postulation_date;
    }

    public function setPostulationDate(\DateTimeInterface $postulation_date): static
    {
        $this->postulation_date = $postulation_date;

        return $this;
    }

    public function getCoverLetter(): ?string
    {
        return $this->cover_letter;
    }

    public function setCoverLetter(string $cover_letter): static
    {
        $this->cover_letter = $cover_letter;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getFreelancer(): ?freelancer
    {
        return $this->freelancer;
    }

    public function setFreelancer(?freelancer $freelancer): static
    {
        $this->freelancer = $freelancer;

        return $this;
    }

    public function getJob(): ?job
    {
        return $this->job;
    }

    public function setJob(?job $job): static
    {
        $this->job = $job;

        return $this;
    }
}
