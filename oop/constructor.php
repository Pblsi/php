<?php
   class Students{

public $name; //"john, Smith"; bad habit to state it here
public $class;//"1st";

function __construct($name ="", $class=""){
    $this->name = $name;
    $this->class = $class;
    
}
function printDetails(){
    echo "$this->name is studying in $this->class class."
    . PHP_EOL;
}

}

$student = new Students();
$student->name = "john, smith";
$student->class = "1st";
$student->printDetails();
// RECOMMENDED
$student = new Students("john, smith", "1st");
$student->printDetails();








//    class Students{

// public $name = "john, Smith";
// public $class = "1st";

// function __construct(){
//     $this->name = "";
//     $this->class = "";
//     echo " hello from constructor";
// }
// function printDetails(){
//     echo "$this->name is studying in $this->class class."
//     . PHP_EOL;
// }

// }
// // creation of instance of a class
// $student = new Students(); // this will invoke the constructor
// $student->printDetails();

?>