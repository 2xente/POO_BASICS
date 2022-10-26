<?php

require __DIR__.'/src/Bicycle.php';
require __DIR__.'/src/Car.php';
require __DIR__.'/src/Truck.php';


$truck = new Truck('black', 2, 'fuel');
echo $truck->forward();
var_dump($truck);

//$bicycle = new Bicycle('blue',1);
//echo $bicycle->forward();
//var_dump($bicycle);
//
//$car = new Car('green', 4, 'electric');
//echo $car->forward();
//var_dump($car);

//$bike = new Bicycle('blue');
//var_dump($bike);
//$bike->setCurrentSpeed(0);
//var_dump($bike); // then, another dump.
//
//
//echo $bike->forward();
//echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
//echo $bike->brake();
//echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
//echo $bike->brake();
//
//
//// Instanciation d'un nouvel objet $rockrider
//$rockrider = new Bicycle('yellow');
//
//
//// Instanciation d'un nouvel objet $tornado
//$tornado = new Bicycle('black');
//
//
//$tornado->forward();


