<?php

require __DIR__.'/src/Bicycle.php';


$bike = new Bicycle('blue');
var_dump($bike);
$bike->setCurrentSpeed(0);
var_dump($bike); // then, another dump.


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');


$tornado->forward();


