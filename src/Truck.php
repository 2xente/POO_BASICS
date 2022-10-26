<?php 

require_once __DIR__.'/Vehicle.php';


class Truck extends Vehicle 
{

    private int $stockage;
    private float $charge;
 
    public function __construct(string $color, int $nbSeats, string $energy)
{
    parent::__construct($color, $nbSeats, $energy);
  }
 

    public function getStockage(): int
    {
        return $this->stockage;
    }

    public function setStockage(int $stockage): void
    {
        $this->stockage = $stockage;
    }

    public function getCharge(): float
    {
        return $this->charge;
    }

    public function setCharge(float $charge): void
    {
        $this->charge = $charge;
    }
}