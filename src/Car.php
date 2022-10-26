<?php

require_once __DIR__.'/Vehicle.php';


class Car extends Vehicle {
 
    private int $energyLevel;

  


    public function __construct(string $color, int $nbSeats, string $energy)
{
    parent::__construct($color, $nbSeats, $energy);
  }



    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}