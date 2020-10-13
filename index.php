<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
$bike->setColor("Blue");
$bike->setNbSeats(1);
$bike->setNbWheels(2);

echo $bike->forward();
echo '<br> Vitess du vélo: ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo: ' . $bike->getcurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();

var_dump($bike);


$polo = new Car('grey', 5, "Oil");
$polo->setEnergyLevel(100);
$polo->setCurrentSpeed(0);

var_dump($polo);
echo $polo->start();
echo '<br> Le niveau d\'énergie de la voiture est de:' . $polo->getEnergyLevel() . 'litres' . '<br>';
echo '<br> La vitesse de la voiture est de : ' . $polo->getCurrentSpeed() . ' km/h' . '<br>';
echo $polo->forward();
echo '<br> Le niveau d\'énergie de la voiture est de:' . $polo->getEnergyLevel() . 'litres' . '<br>';
echo '<br> La vitesse de la voiture est de : ' . $polo->getCurrentSpeed() . ' km/h' . '<br>';
echo $polo->brake();
echo '<br> La vitesse de la voiture est de : ' . $polo->getCurrentSpeed() . ' km/h' . '<br>';
