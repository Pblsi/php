<?php

abstract class Car{

    abstract function applyBreak();

    function hello(){
        echo "Hello from car class" . PHP_EOL;
    }
}

class SportsCar extends Car{
    function applyBreak(){

    }
}

$car1 = new SportsCar();
$car1->applyBreak();
$car1->hello();

//Cannot create instance of Abstract Class
//$c = new Car()
?>