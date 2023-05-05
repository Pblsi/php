<?php

// chainMethods example
class Bank {

    public $accountNum;
    public $name;
    public $balance = 0;

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

function checkBalance(){
echo "your account balance: $this->balance" . PHP_EOL;
}

}
// you call a method with an object
// when you want to chain it $this method should return the instance of a class
// this method returning the instance
// the left hand side method should return $this
$bank1 = new Bank();
$bank1->name = "fred hammond";
$bank1->accountNum = "0123456789";
$bank1->balance = 500;

$bank1->checkBalance();
$bank1->depositAmount(500);
$bank1->checkBalance();
$bank1->deductedAmount(100);
$bank1->checkBalance();
$bank1->deductedAmount(1000);
$bank1->checkBalance();


echo "$bank1->name account balance is $bank1->balance and account number $bank1->accountNum." . PHP_EOL;













// class Bank {

//     public $accountNum;
//     public $name;
//     public $balance = 0;

//     function depositAmount($amt){
//         $this->balance = $this->balance + $amt;
//     }
//     function deductedAmount($amt){

//         if($this->balance <= 0){
//             echo "insufficient fund" . PHP_EOL;
//             return;
//         }
//         if($this->balance < $amt){
//             echo "insufficient fund. balance lower that input" . PHP_EOL;
//             return;
//         }
//         $this->balance = $this->balance - $amt;
//     }

// function checkBalance(){
// echo "your account balance: $this->balance" . PHP_EOL;
// }

// }
// $bank1 = new Bank();
// $bank1->name = "fred hammond";
// $bank1->accountNum = "0123456789";
// $bank1->balance = 500;

// $bank1->checkBalance();
// $bank1->depositAmount(500);
// $bank1->checkBalance();
// $bank1->deductedAmount(100);
// $bank1->checkBalance();
// $bank1->deductedAmount(1000);
// $bank1->checkBalance();


// echo "$bank1->name account balance is $bank1->balance and account number $bank1->accountNum." . PHP_EOL;

?>