<?php

class Student{

    public $name = "";
    public $class = "";
    // GET
    function getName() : string{
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    }
    
    function getClass() : string{
        return $this->class;
    }
    function setClass($class){
        $this->class = $class;

    }
    function printDetails(){
        echo "$this->name is studying in $this->class class." . PHP_EOL;
    }

}
$st1 = new Student();
$st2 = new Student();

$st1->setName("bob fisher");
$st1->setClass("form 1");

$st2->setName("bandit");
$st2->setClass("form 4");

$st1->printDetails();
$st2->printDetails();
?>