<?php

require 'Truck.php';
require 'Car.php';

$camion = new Truck("red", 2, "fuel", 280);

echo "Color : " . $camion->getColor() . "<br>";
echo "Energy : " . $camion->getEnergy() . "<br>";
echo "Nb seats : " . $camion->getNbSeats() . "<br>";
echo "Storage : " . $camion->getStorage() . "<br>";
echo "Is it full ? : " . $camion->isFull() . "<br>";
$camion->setStorage(280);
echo "We changed the storage : " . $camion->getStorage() . "<br>";
echo "Is it full ? : " . $camion->isFull() . "<br>";

$comion = new Truck("blue", 4, "fuel", 10);
$camian = new Truck("green", 7, "electric", 8000);

echo "<br>";

echo $comion->start();
echo $comion->start();
echo $comion->forward(40);
echo $comion->forward();
echo $comion->forward();
echo $comion->forward();
echo $comion->brake();
echo $comion->brake();
echo $comion->brake();
echo $comion->brake();
echo $comion->brake();