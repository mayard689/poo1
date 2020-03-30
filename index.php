<?php

require_once 'Car.php';
require_once 'Bicycle.php';


$myBike=new Bicycle("more or less red");
echo $myBike->getColor();

$myCar=new Car("blue", 5, "electric");
echo $myCar->getEnergy();

