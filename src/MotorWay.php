<?php

require_once __DIR__.'/HighWay.php';


final class MotorWay extends Highway 
{

    public function addVehicle($vehicle) {
        if ($vehicle == "Bike" || $vehicle =="Skateboard") 
        {
            echo "Les vélos et les skateboard sont interdit.";
        }
        else {
            $currentVehciles = $vehicles;
        }
    }
}