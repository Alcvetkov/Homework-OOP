<?php

require_once 'autoload.php';

$owner1 = new Person('Petar Kunchev', 25, true);

$owner1->setMoney(300);

$car1 = new Car('BMW', true, 'red', 1000, 230);
$car2 = new Car('Mercedes', true, 'white', 1000, 260);
$car3 = new Car('Audi', false, 'black', 1000, 240);
$car4 = new Car('VW', false, 'green', 800, 160);

// echo $car1->showCarInfo() . PHP_EOL;

$carshop = new CarShop($car1, $car2, $car3);


$carshop->showAllCarsInTheShop();

$carshop->sellNextCar($owner1);
$carshop->showAllCarsInTheShop();



// $carshop->showAllCarsInTheShop();

// $carshop->addCar($car4);
// $carshop->showAllCarsInTheShop();



// $owner1->setMoney(50000);
// echo $owner1->getMoney() . PHP_EOL;

// $owner1->buyCar($car1);
// echo $owner1->getMoney() . PHP_EOL;

// $owner1->sellCarForScrap(300);
// echo $owner1->getMoney() . PHP_EOL;


// $car1->changeColor('black');
// $car1->changeGear(1);
// $car1->accelerate();
// $car1->accelerate();

// echo $car1->showCarInfo() . PHP_EOL;