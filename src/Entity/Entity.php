<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\EntityRepository")
 */
class Entity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Field1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getField1(): ?string
    {
        return $this->Field1;
    }

    public function setField1(string $Field1): self
    {
        $this->Field1 = $Field1;

        return $this;
    }
}
