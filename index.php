<?php

require_once 'car.php';

$homer = new Car("pink", 5, "gas");

echo "speed : " . $homer->getCurrentSpeed() . "<br>"; // la voiture est arreté

$homer->start(); 

echo "speed : " . $homer->getCurrentSpeed() . "<br>"; // la voiture démarre
echo "the level of energy : " . $homer->getEnergyLevel() . "<br>"; // et le niveau d'essence baisse

$homer->forward();

echo "speed : " . $homer->getCurrentSpeed() . "<br>"; // la voiture accélère
echo "the level of energy : " . $homer->getEnergyLevel() . "<br>"; // et le niveau d'essence baisse 

$homer->brake();

echo " speed :" . $homer->getCurrentSpeed() . "<br>"; // la voiture freine jusqu'à l'arrêt 
echo "the level of energy : " . $homer->getEnergyLevel() . "<br>"; // et le niveau d'essence s'arrête de baisser quand la voiture s'arrête complètement 