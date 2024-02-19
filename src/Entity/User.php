<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]

class User implements UserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;
  /** *  @Assert\NotBlank(message=" FullName doit etre non vide")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer un nom au mini de 3 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     */
    #[ORM\Column(length: 255)]
    private ?string $full_name = null;
    /** *  @Assert\NotBlank(message=" Email doit etre non vide")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer une adresse email"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     */

    #[ORM\Column(length: 255)]
    private ?string $email = null;
/** *  @Assert\NotBlank(message=" Password doit etre non vide")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer un nom au mini de 3 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     */
    #[ORM\Column(length: 255)]
    private ?string $password = null;
/** *  @Assert\NotBlank(message=" UserType doit etre non vide")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer un nom au mini de 3 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     */
    #[ORM\Column(length: 255)]
    private ?string $user_type = null;
    #[ORM\Column]
    private ?array $roles = [];


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->full_name;
    }

    public function setFullName(string $full_name): static
    {
        $this->full_name = $full_name;

        return $this;
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

    public function getUserType(): ?string
    {
        return $this->user_type;
    }

    public function setUserType(string $user_type): static
    {
        $this->user_type = $user_type;

        return $this;
    }
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function getSalt(): ?string
    {
        return null;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getUsername(): string
    {
        return (string) $this->email;
    }

    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
