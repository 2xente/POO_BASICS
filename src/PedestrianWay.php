<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';


final class PedestrianWay extends Highway {

    public function addVehicle(Vehicle $vehicle): string
    {
        $this->setCurrentVehicles($vehicle);
        return 'vehicle added';
    }
}
