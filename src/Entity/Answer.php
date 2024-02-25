<?php

namespace App\Entity;

use App\Repository\AnswerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnswerRepository::class)]
class Answer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 500)]
    private ?string $description = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Claim $claim = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $answer = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $answerFor = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getClaim(): ?Claim
    {
        return $this->claim;
    }

    public function setClaim(?Claim $claim): static
    {
        $this->claim = $claim;

        return $this;
    }

    public function getAnswer(): ?User
    {
        return $this->answer;
    }

    public function setAnswer(?User $answer): static
    {
        $this->answer = $answer;

        return $this;
    }

    public function getAnswerFor(): ?User
    {
        return $this->answerFor;
    }

    public function setAnswerFor(?User $answerFor): static
    {
        $this->answerFor = $answerFor;

        return $this;
    }
}
