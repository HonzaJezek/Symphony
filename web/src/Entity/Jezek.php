<?php

namespace App\Entity;

use App\Repository\JezekRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JezekRepository::class)]
class Jezek
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $jmeno = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $poznavacicislo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $heslo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $datum = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\ManyToOne(inversedBy: 'jezeks')]
    private ?Test1 $cena = null;

    #[ORM\ManyToOne(inversedBy: 'jezeks')]
    private ?Test2 $znak = null;

    #[ORM\ManyToOne(inversedBy: 'jezeks')]
    private ?Test3 $Vuz = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJmeno(): ?string
    {
        return $this->jmeno;
    }

    public function setJmeno(?string $jmeno): self
    {
        $this->jmeno = $jmeno;

        return $this;
    }

    public function getPoznavacicislo(): ?string
    {
        return $this->poznavacicislo;
    }

    public function setPoznavacicislo(?string $poznavacicislo): self
    {
        $this->poznavacicislo = $poznavacicislo;

        return $this;
    }

    public function getHeslo(): ?string
    {
        return $this->heslo;
    }

    public function setHeslo(?string $heslo): self
    {
        $this->heslo = $heslo;

        return $this;
    }

    public function getDatum(): ?string
    {
        return $this->datum;
    }

    public function setDatum(?string $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCena(): ?Test1
    {
        return $this->cena;
    }

    public function setCena(?Test1 $cena): self
    {
        $this->cena = $cena;

        return $this;
    }

    public function getZnak(): ?Test2
    {
        return $this->znak;
    }

    public function setZnak(?Test2 $znak): self
    {
        $this->znak = $znak;

        return $this;
    }

    public function getVuz(): ?Test3
    {
        return $this->Vuz;
    }

    public function setVuz(?Test3 $Vuz): self
    {
        $this->Vuz = $Vuz;

        return $this;
    }
}
