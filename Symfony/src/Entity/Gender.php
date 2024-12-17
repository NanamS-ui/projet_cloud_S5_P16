<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'gender')]
class Gender
{
    #[ORM\Id]
    #[ORM\Column(type: 'string', length: 50,name:'gender_id')]
    private string $genderId;

    #[ORM\Column(type: 'string', length: 50, unique: true)]
    private string $name;

    #[ORM\OneToMany(mappedBy: 'gender', targetEntity: Users::class)]
    private Collection $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getGenderId(): ?string
    {
        return $this->genderId;
    }

    public function setGenderId(string $gender_id): self
    {
        $this->genderId = $gender_id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUsers(): Collection
    {
        return $this->users;
    }
}
