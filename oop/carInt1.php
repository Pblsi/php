<?php

require_once "carInt.php";
require_once "sportscar.php";
require_once "carmodel.php";

$car1 = new Sportscar();
$car1->increaseSpeed() . PHP_EOL;
$car1->decreaseSpeed() . PHP_EOL;
$car1->applyBreak() . PHP_EOL;
$car1->setModel("ferarri") . PHP_EOL;
echo "Car Model : " . $car1->getModel() . PHP_EOL;

?>