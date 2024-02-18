<?php

namespace App\Entity;

use App\Repository\TrainingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TrainingRepository::class)]
class Training
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



/**
     * @Assert\NotBlank(message="title doit être non vide")
     * @Assert\Length(
     *     min = 5,
     *     minMessage="Entrer un titre ou minimum de 5 caractères"
     *     )
     * @ORM\Column(type="string", length=255)
     
*/
    

    #[ORM\Column(length: 255)]
    private ?string $title = null;
/**
 * @Assert\Length(
 *     min = 7,
 *     minMessage="Entrer une discription avec au moins {{ 7 }} caractères",
 *     max = 1000,
 *     maxMessage="Le titre ne peut pas dépasser {{ 1000 }} caractères"
 * )
 * @ORM\Column(type="string", length=500)
 */

    #[ORM\Column(length: 500)]
    private ?string $description = null;
/**
 * @ORM\Column(type="date")
 * @Assert\NotBlank(message="La date de début ne doit pas être vide")
 */

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $start_date = null;
/**
 * @ORM\Column(type="date")
 * @Assert\NotBlank(message="La date de fin ne doit pas être vide")
 * @Assert\GreaterThan(propertyPath="start_date", message="La date de fin doit être postérieure à la date de début")
 */

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $end_date = null;
/**
 * @ORM\Column(type="integer")
 * @Assert\NotBlank(message="Le nombre de places ne doit pas être vide")
 * @Assert\Type(type="integer", message="Le nombre de places doit être un entier")
 * @Assert\PositiveOrZero(message="Le nombre de places doit être positif ou nul")
 */
    #[ORM\Column]
    private ?int $number_of_places = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $trainer = null;
/**
 * @ORM\ManyToOne(targetEntity=TrainingCategory::class)
 * @ORM\JoinColumn(nullable=false)
 * @Assert\NotNull(message="La catégorie ne doit pas être vide")
 */
    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TrainingCategory $category = null;

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

    public function getTrainer(): ?User
    {
        return $this->trainer;
    }

    public function setTrainer(?User $trainer): static
    {
        $this->trainer = $trainer;

        return $this;
    }

    public function getCategory(): ?TrainingCategory
    {
        return $this->category;
    }

    public function setCategory(?TrainingCategory $category): static
    {
        $this->category = $category;

        return $this;
    }
}
