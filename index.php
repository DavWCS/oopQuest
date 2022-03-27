<?php
//index.php

//Link with other sheets

require_once 'Bicycle.php';
require_once 'Car.php';

//Create a new bike

$yellowBike = new Bicycle('Yellow', 20);

var_dump($yellowBike);

//Moving bike

echo $yellowBike->forward();

echo '<br> Vitesse du vélo : ' . $yellowBike->getCurrentSpeed() . ' km/h' . '<br>';

echo $yellowBike->brake();

echo '<br> Vitesse du vélo : ' . $yellowBike->getCurrentSpeed() . ' km/h' . '<br>';

echo $yellowBike->brake();

//Create a new car

$blackCar = new Car('black',4, 'gasoil');
$blackCar->setCurrentSpeed = 80;
var_dump($blackCar);

//Run car

echo $blackCar->runCar() .'<br>';

//Moving car

echo $blackCar->forward(210);

echo '<br> Vitesse de la voiture : ' . $blackCar->getCurrentSpeed() . ' km/h' . '<br>';

echo $blackCar->brake();

echo '<br> Vitesse de la voiture : ' . $blackCar->getCurrentSpeed() . ' km/h' . '<br>';