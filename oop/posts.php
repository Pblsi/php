<?php

class posts{

    public $content; 

    function __construct($content){
        // initialize the value
        echo "this is a Constructor" .PHP_EOL; 
        $this->content =$content;
        return $this;
    }

    function __destruct(){
        // close the connection or empty the space
        echo "this is a Destructor" .PHP_EOL; 
    }

    function printContent(){

        echo $this->content . PHP_EOL;
        return $this;
    }

}
$post1 = new Posts("solid post");
//print and get the $content property from the time.
$content = $post1->printContent()->content;
echo $content;
?>