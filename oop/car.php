<?php

// class name first letter should start with block letter
// file name should match with class name
// one file should have one class you can have multiple.
// class is the keyword used to define a class
// class is opened and closed with {}

// -> is a symbol to access the property of a class and method

class School{
public $name;
public $teacher;
public $class;
public $subject;


function Mizpeh(){
    echo "good school" . PHP_EOL;
}

}

$School1 = new School();
$School1 -> name = "Mizpeh";
$School1 -> teacher = "Frank";
$School1 -> class ="Basic 5";
$School1 -> subject ="Math";

echo " Mr $School1->teacher teaches $School1->class in $School1->name primary school" . PHP_EOL;







// class Car{

//         public $name;
//         public $color;

//         function sayHello(){
//             echo "Hello from car class" . PHP_EOL;
//         }

// }
// $car1 = new Car();
// $car1 ->name = "Ferrari";
// $car1 ->color = "Red";
// $car1 ->sayHello();
// echo "$car1->name is $car1->color Color." . PHP_EOL;

// $car2 = new Car();
// $car2 ->name = "Rang rover";
// $car2 ->color = "black";
// $car2 ->sayHello();
// echo "$car2->name is $car2->color Color." . PHP_EOL;
?>