<?php

namespace App\Entity;

use App\Repository\Test3Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Test3Repository::class)]
class Test3
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'Vuz', targetEntity: Jezek::class)]
    private Collection $jezeks;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $test3 = null;

    public function __construct()
    {
        $this->jezeks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Jezek>
     */
    public function getJezeks(): Collection
    {
        return $this->jezeks;
    }

    public function addJezek(Jezek $jezek): self
    {
        if (!$this->jezeks->contains($jezek)) {
            $this->jezeks->add($jezek);
            $jezek->setVuz($this);
        }

        return $this;
    }

    public function removeJezek(Jezek $jezek): self
    {
        if ($this->jezeks->removeElement($jezek)) {
            // set the owning side to null (unless already changed)
            if ($jezek->getVuz() === $this) {
                $jezek->setVuz(null);
            }
        }

        return $this;
    }

    public function getTest3(): ?string
    {
        return $this->test3;
    }

    public function setTest3(?string $test3): self
    {
        $this->test3 = $test3;

        return $this;
    }
}
