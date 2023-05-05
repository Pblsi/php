<?php

class posts{
    function __construct(){
        // initialize the value
        echo "this is a Constructor" .PHP_EOL; 
    }

    function __destruct(){
        // close the connection or empty the space
        echo "this is a Destructor" .PHP_EOL; 
    }
}
$post1 = new Posts();

?>