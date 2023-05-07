<?php

require_once "carInt.php";

class SportsCar implements Car {

    public $model;

public function applyBreak(){

    echo "breakes on" . PHP_EOL;

}

public function increaseSpeed(){

    echo " speed increased" . PHP_EOL;

}

public function decreaseSpeed(){

    echo "speed decreased" . PHP_EOL;

}

public function setModel($model){

    $this->model = $model;
 
}
public function getModel() : string{
    return $this->model;
}

}

?>