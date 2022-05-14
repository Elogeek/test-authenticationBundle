<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id;

    #[ORM\Column(type: 'varchar')]
    private ?string $username;

    #[ORM\Column(type: 'varchar')]
    private ?string $password;

    /**
     * @return int|null
     */
    public function getId() : ?int {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername( User $username): self {
        $this->username = $username;
        return  $this;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword(User $password): self {
        $this->password = $password;
        return $this;
    }

}


