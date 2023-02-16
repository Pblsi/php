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
class Plane extends Car {


}
$jet = new Plane();
$jet->MoveWheels();
echo $jet->wheels;
// if(class_exists("Plane")) {
//     echo "it does";
// }


?>