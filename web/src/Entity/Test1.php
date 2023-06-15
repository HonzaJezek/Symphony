<?php

namespace App\Entity;

use App\Repository\Test1Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Test1Repository::class)]
class Test1
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'cena', targetEntity: Jezek::class)]
    private Collection $jezeks;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $test1 = null;

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
            $jezek->setCena($this);
        }

        return $this;
    }

    public function removeJezek(Jezek $jezek): self
    {
        if ($this->jezeks->removeElement($jezek)) {
            // set the owning side to null (unless already changed)
            if ($jezek->getCena() === $this) {
                $jezek->setCena(null);
            }
        }

        return $this;
    }

    public function getTest1(): ?string
    {
        return $this->test1;
    }

    public function setTest1(?string $test1): self
    {
        $this->test1 = $test1;

        return $this;
    }
}
