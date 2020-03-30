<?php

require_once 'Car.php';
require_once 'Bicycle.php';


$myBike=new Bicycle("more or less red");
$myCar=new Car("blue", 5, "electric");
$myCar2=new Car("blue", 5, "electric");

$myCar->start();
$myCar2->start();

?>

<html>

    <?= $myBike->getColor() ?><br>
    <?= $myBike->forward() ?><br>
    <?= $myBike->brake() ?><br>
    
    
    <?= $myCar->getEnergy() ?><br>
    
    <?= $myCar->forward() ?><br>
    <?= $myCar->brake() ?><br>
    
    
    <?= $myCar2->getEnergy() ?><br>
    
    <?= $myCar2->forward() ?><br>
    <?= $myCar2->brake() ?><br>

</html>


