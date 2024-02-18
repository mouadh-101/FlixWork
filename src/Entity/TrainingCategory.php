<?php

namespace App\Entity;

use App\Repository\TrainingCategoryRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: TrainingCategoryRepository::class)]
class TrainingCategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
/**
 * @ORM\Column(length=255)
 * @Assert\NotBlank(message="Le nom de la catégorie ne doit pas être vide")
 * @Assert\Length(max=255, maxMessage="Le nom de la catégorie ne doit pas dépasser {{ 255 }} caractères")
 */
    #[ORM\Column(length: 255)]
    private ?string $category_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryName(): ?string
    {
        return $this->category_name;
    }

    public function setCategoryName(string $category_name): static
    {
        $this->category_name = $category_name;

        return $this;
    }
}
