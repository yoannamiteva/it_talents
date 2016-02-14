<?php

require_once 'autoload.php';

$car1 = new Car('BMW', true, 'black' , 340000 , 250);
$car1->setCurrentSpeed(100);
$car1->setCurrentGear(4);

$car2 = new Car('Audi', false , 'grey' , 280000 , 260);
$car2->setCurrentSpeed(150);
$car2->setCurrentGear(5);

echo "Gear is: ", $car1->getCurrentGear()," and the speed is: ", $car1->getCurrentSpeed(),PHP_EOL;

$car1->changeGear(5);
$car1->accelerate();

echo "Now the gear is: ", $car1->getCurrentGear()," and the speed is: ", $car1->getCurrentSpeed(),PHP_EOL;


$shop = new CarShop();
$shop->addCar($car1);
$shop->addCar($car2);

$shop->showAllCarsInTheShop();



