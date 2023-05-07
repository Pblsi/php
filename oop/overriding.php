<?php

class University {

function hello(){
echo "hello from university class" . PHP_EOL;
}
}
class Teacher extends University{

    function hello(){
echo " hello from teacher class " . PHP_EOL;
parent::hello();
    }
}

$teacher =new Teacher();
$teacher->hello();

?>