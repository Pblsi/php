<?php
class Car {

    Var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels(){
        // echo "Wheels move";
        $this->wheels = 10;
    }
    // function CreateDoors(){
    //     $this->doors = 6;
    // }
}


$bmw = new Car();
$truck = new Car();
echo $bmw->wheels . "<br>";

echo $truck->wheels = 10 . "<br>";
echo $truck->doors;
// $bmw-> MoveWheels();
// $bmw -> wheels = 8;
// echo $bmw -> wheels;
// echo $bmw-> wheels;
?>