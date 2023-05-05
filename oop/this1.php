<?php

class Car{
    // anything you are accessing without $this refers to local variable
    public $name = "";
    public $age = 10; // class property
//  how to access properties via methods

//  getter methods
function getName() : string{
    // get will always have return type 
    // get the property
    return $this->name;
}

// setter methods
function setName($name){
    // set will always have parameter set to that function
    // set the property
    // this always refers to the instance of the class and the instance
    //  of a class access the property of that class
    $age = 10; //local variable
    $this->age = $age;
    $this->name = $name;
    // anything you are accessing with $this will always refer to class properties
}

}
$car1 = new Car();
// using getter/setter method

$car1->setName("BMW");
echo $car1->getName() . PHP_EOL;

// change properties from outside
$car1->name = "Ferrari";
echo $car1->getName() . PHP_EOL;

// independent Objects
$car2 = new Car();
$car2->name = "Lexus";
echo $car1->getName() . PHP_EOL;
echo $car2->getName() . PHP_EOL;

?>