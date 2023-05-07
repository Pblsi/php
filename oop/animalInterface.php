<?php

interface Animal{

 function makeSound();

}
class Dog implements Animal{

     function makeSound(){
        echo " woof... woof...";
    }
}
class Cat implements Animal{

     function makeSound(){
        echo "meow meow";
    }
}


?>