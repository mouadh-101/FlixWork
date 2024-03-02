<?php
namespace App\Entity;

use App\Repository\JobsCategoryRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: JobsCategoryRepository::class)]
#[UniqueEntity('category_name', message: 'This category name is already in use.')]
class JobsCategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $category_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryName(): ?string
    {
        return $this->category_name;
    }

    public function setCategoryName(?string $category_name): static
    {
        $this->category_name = $category_name;

        return $this;
    }
}
