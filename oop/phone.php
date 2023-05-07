<?php

interface Phone {
    function makeCall($number);
    function sendMessage($number, $message);

}

class Ios implements Phone {

    public $number;
    public $message;

    function makeCall($number){

        echo "Making Call to $number" . PHP_EOL;
        
    }
    function sendMessage($number, $message){
        
        echo "Sending Message to $number" . PHP_EOL;
        
    }

}

$iphone15 = new Ios();
$iphone15->makeCall("08123456789");
$iphone15->sendMessage("09123456789","Calling You");

?>