<?php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Vehicle.php';
require_once 'Truck.php';

$myBike=new Bicycle("more or less red",1);

$myCar=new Car("blue", 5, "electric");
$myCar2=new Car("blue", 5, "electric");

$myTruck=new Truck(100,"blue", 5 );
$myTruck2=new Truck(200,"blue", 5 );

?>

<html>

    <?= $myBike->getColor() ?><br>
    <?= $myBike->forward() ?><br>
    <?= $myBike->brake() ?><br>
    
    

    
    <?= $myTruck->forward() ?><br>
    <?= $myTruck->brake() ?><br>

    <?= $myTruck->isFull() ?><br>
    <?php $myTruck->setLoad(100) ?><br>
    <?= $myTruck->isFull() ?><br>
    
    <?= $myTruck2->forward() ?><br>
    <?= $myTruck2->brake() ?><br>

</html>


