<?php

class ChainMethods{
    public $name; // property

    //call this method first to change property value
function method1(){
    echo "Hello from Method1" . PHP_EOL;
    $this->name = "Chain Methods"; // change property value
    return $this;
}

//call this method to display the value
function method2(){
    echo "hello from method2 ($this->name)" . PHP_EOL; // printing it
}
}

$cm = new ChainMethods();
$cm->method1()->method2(); // this is chain and must be called in sequence


?>