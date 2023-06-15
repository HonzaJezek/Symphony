<?php

namespace App\Entity;

use App\Repository\Test2Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Test2Repository::class)]
class Test2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'znak', targetEntity: Jezek::class)]
    private Collection $jezeks;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $test2 = null;

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
            $jezek->setZnak($this);
        }

        return $this;
    }

    public function removeJezek(Jezek $jezek): self
    {
        if ($this->jezeks->removeElement($jezek)) {
            // set the owning side to null (unless already changed)
            if ($jezek->getZnak() === $this) {
                $jezek->setZnak(null);
            }
        }

        return $this;
    }

    public function getTest2(): ?string
    {
        return $this->test2;
    }

    public function setTest2(?string $test2): self
    {
        $this->test2 = $test2;

        return $this;
    }
}
