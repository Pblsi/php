<?php

class ChainMethods{

function method1(){
    echo "Hello from Method1" . PHP_EOL;
    return $this;
}

function method2(){
    echo "hello from method2" . PHP_EOL;
}
}

$cm = new ChainMethods();
$cm->method1()->method2();


?>