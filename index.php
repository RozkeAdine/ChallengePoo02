<?php
require_once 'class/Bicycle.php';
require_once 'class/car.php';
require_once 'class/truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);


$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);


$truck = new Truck('green', 8, 'fuel');

echo $truck->starter();
echo '<br> Chargement du camion : ' . $truck->getLoadCapacity() . '<br>';
echo $truck->fill();
echo '<br> Chargement du camion : ' . $truck->getLoadCapacity() . '<br>';
echo $truck->fill();
var_dump(Truck::ALLOWED_ENERGIES);
?>