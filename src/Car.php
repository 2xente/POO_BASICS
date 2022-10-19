<?php

class Car 
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy) 
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }


    public function start() : string 
    {
        if($this->energyLevel <0){
            $fuel = "Let's Go";
        }
        else {
            $fuel = "Not fuel yet";
        }
        return $fuel;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
    
        return "Go !";
    }
    
    public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }






    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    
    public function setNbWHeels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
    
    
    
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }



    public function getColor(): string
{
    return $this->color;
}

public function setColor(string $color): void
{
    $this->color = $color;
}



public function getNbSeats(): int
{
    return $this->nbSeats;
}

public function setNbSeats(int $NbSeats): void
{
    $this->nbSeats = $nbSeats;
}

public function getEnergy(): string
{
    return $this->energy;
}

public function setEnergy(string $energy): void
{
    $this->energy = $energy;
}



public function getEnergyLevel(): int
{
    return $this->energyLevel;
}

public function setEnergyLevel(int $energyLevel): void
{
    $this->energyLevel= $energyLevel;
}

}