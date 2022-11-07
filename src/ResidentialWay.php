<?php

require_once __DIR__.'/HighWay.php';


final class ResidentialWay extends Highway  
{

    public function addVehicle($vehicle) {
        if ($vehicle == "Bike" || $vehicle =="Skateboard") 
        {
            $currentVehciles = $vehicles;
        }
        else {
            echo "Les autres véhicules sont interdit.";
        }
    }
}
