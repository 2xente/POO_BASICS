<?php 

abstract class HighWay 
{
    private array $currrentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle($vehicle);

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles()
    {
        $this->currentVehicles = $currrentVehicles;
    }

    public function getNbLane() : int
    {
        return $this->nbLane;
    }

    public function setNbLane() 
    {
        $this->nbLane = $nbLane;

    }

    public function getMaxSpeed() : int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed() 
    {
        $this->maxSpeed = $maxSpeed;

    }
}