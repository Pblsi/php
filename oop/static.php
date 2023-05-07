<?php

class Calculator{
    static $result;

    static function add($a, $b){
       self::$result = $a + $b;
    }
}

// Calculator::$result = Calculator::add(1,2);
echo Calculator::add(2, 4) . PHP_EOL;
echo Calculator::$result . PHP_EOL;
    
?>