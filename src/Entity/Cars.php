<?php

namespace App\Entity;

use App\Repository\CarsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarsRepository::class)
 */
class Cars
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $registationNumber;

    /**
     * @ORM\Column(type="boolean")
     */
    private $availability;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity=Brands::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $brands;

    /**
     * @ORM\ManyToOne(targetEntity=Gears::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $gears;

    /**
     * @ORM\ManyToOne(targetEntity=Engines::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $engines;

    /**
     * @ORM\ManyToOne(targetEntity=Seat::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $seat;

    /**
     * @ORM\ManyToOne(targetEntity=Fleet::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $fleets;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegistationNumber(): ?string
    {
        return $this->registationNumber;
    }

    public function setRegistationNumber(string $registationNumber): self
    {
        $this->registationNumber = $registationNumber;

        return $this;
    }

    public function getAvailability(): ?bool
    {
        return $this->availability;
    }

    public function setAvailability(bool $availability): self
    {
        $this->availability = $availability;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getBrands(): ?Brands
    {
        return $this->brands;
    }

    public function setBrands(?Brands $brands): self
    {
        $this->brands = $brands;

        return $this;
    }

    public function getGears(): ?Gears
    {
        return $this->gears;
    }

    public function setGears(?Gears $gears): self
    {
        $this->gears = $gears;

        return $this;
    }

    public function getEngines(): ?Engines
    {
        return $this->engines;
    }

    public function setEngines(?Engines $engines): self
    {
        $this->engines = $engines;

        return $this;
    }

    public function getSeat(): ?Seat
    {
        return $this->seat;
    }

    public function setSeat(?Seat $seat): self
    {
        $this->seat = $seat;

        return $this;
    }

    public function getFleets(): ?Fleet
    {
        return $this->fleets;
    }

    public function setFleets(?Fleet $fleets): self
    {
        $this->fleets = $fleets;

        return $this;
    }
}
