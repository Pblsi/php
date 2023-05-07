<?php

class Dog{

    public $color;
    public $breed;

    function dogBark(){
        echo "woof woof..!" . PHP_EOL;
    }

    function dogSleep(){
        echo "ZZZZZZZZZZzzzzzzzzzz" . PHP_EOL;
    }

    function dogo(){
        echo "dogo is a $this->color $this->breed" . PHP_EOL;
    }
}
$dog1 = new Dog();
// access the properties directly
$dog1 -> color = "red";
$dog1 -> breed = "rotwiler";

// call method
$dog1->dogBark();
$dog1->dogo();
$dog1->dogSleep();
?>