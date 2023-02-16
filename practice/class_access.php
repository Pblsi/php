<?php
class Car {

    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function showProperty(){
    echo $this->engine;
}

}
$bmw = new Car();
$semi = new Semi();
class Semi extends Car {
    
    // function showProperty(){
    //     echo $this->hood;
    // }
}
echo $bmw->showProperty();
// $truck = new Car();
// $bus = new Car();