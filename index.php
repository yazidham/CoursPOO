<?php

require_once 'car.php';
require_once 'bicycle.php';
require_once 'truck.php';

$homer = new Car('pink', 5, 'fuel');

$bart = new Bicycle ('red', 1);

$truck = new Truck('Blue', 3, 'fuel', 100);

$truck->forward();
echo $truck->getCurrentSpeed() . "<br>"; // le camion avance

$truck->brake();
echo $truck->getCurrentSpeed() . "<br>"; // le camion freine 

$truck->setStorage(20);
echo $truck->getStorage(); // contrôle le chargement 