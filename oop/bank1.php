<?php

class Bank{

private $balance;

function getBalance(){
    return $this->balance;
}

function __construct($balance){
    $this->balance = $balance;
}

function depositAmount($amt){
    $this->balance = $this->balance + $amt;
}
function deductedAmount($amt){
    if($this->balance <= 0){
        echo "insufficient fund" . PHP_EOL;
        return;
    }
    if($this->balance < $amt){
        echo "insufficient fund. balance lower that input" . PHP_EOL;
        return;
    }
    $this->balance = $this->balance - $amt;

}

}

$bank1 = new Bank(100);
echo $bank1->getBalance() . PHP_EOL;
$bank1->depositAmount(500);
echo $bank1->getBalance() . PHP_EOL;
$bank1->deductedAmount(500);
echo $bank1->getBalance() . PHP_EOL;

?>