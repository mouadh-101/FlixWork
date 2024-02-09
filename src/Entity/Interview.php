<?php

namespace App\Entity;

use App\Repository\InterviewRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InterviewRepository::class)]
class Interview
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $interview_date = null;

    #[ORM\Column(length: 255)]
    private ?string $interview_link = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 50)]
    private ?string $etat = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?recruiter $recruiter = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?freelancer $freelancer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInterviewDate(): ?\DateTimeInterface
    {
        return $this->interview_date;
    }

    public function setInterviewDate(\DateTimeInterface $interview_date): static
    {
        $this->interview_date = $interview_date;

        return $this;
    }

    public function getInterviewLink(): ?string
    {
        return $this->interview_link;
    }

    public function setInterviewLink(string $interview_link): static
    {
        $this->interview_link = $interview_link;

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

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getRecruiter(): ?recruiter
    {
        return $this->recruiter;
    }

    public function setRecruiter(?recruiter $recruiter): static
    {
        $this->recruiter = $recruiter;

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
}
