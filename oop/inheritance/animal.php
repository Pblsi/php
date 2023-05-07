<?php
// bug (yes it hunts not displaying on console for tiger bolean :true)
class Animal{

    protected $name;
    protected $hunt = false;

    function doesHunting(){ 
        if($this->hunt){
            echo "Yes it Hunts" . PHP_EOL;
        }else{
            echo "Doesnt Hunt";
        }

    }

}

class Dog extends Animal{

    function ___consrtuct($name, $hunt){
        $this->name = $name;
        $this->hunt = $hunt;
    }

    function makeSound(){
        echo " Woof Woof..." . PHP_EOL;
    }
}

class Tiger extends Animal{
    
    function ___consrtuct($name, $hunt){
        $this->name = $name;
        $this->hunt = $hunt;
    }
    
    function makeSound(){
        echo " Grr... Grr..." . PHP_EOL;
    }
}

$dog = new Dog("syberian husky", false);
$dog->makeSound();
$dog->doesHunting();

$tiger = new Tiger ("african tiger", true);
$tiger->makeSound();
$tiger->doesHunting();

?>