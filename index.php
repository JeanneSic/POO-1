<?php
require_once 'Bicycle.php';
$bike = new Bicycle();
$bike->color = "blue";
$bike->currentSpeed = 0;

echo $bike->forward();
echo '<br> Vitess du vélo: ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo: ' . $bike->currentSpeed . 'km/h' . '<br>';
echo $bike->brake();

var_dump($bike);

require_once 'Car.php';
$car = new Car();
$pink = new Car;

$car->currentSpeed = 0;
echo $car->forward();
echo '<br> Vitess de la voiture: ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed() . 'km/h' . '<br>';
echo $car->brake();
var_dump($car);