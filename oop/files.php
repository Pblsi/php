<?php

class Files{

function displayContent($filename) : bool{

    $result = true;
    try{
        echo "read the content of the file:$filename" . PHP_EOL;
        $content = file_get_contents($filename);
        echo "Displaying Content of the file: $filename" . PHP_EOL;
        echo $content;


    }catch(Exception $e){
        $result = false;
    }
    return $result;

}

}

$files1 = new Files();
$files1 -> displayContent("notes.txt");

// the reuseability of OOP
$files2 = new Files();
$files2 -> displayContent("test.txt");

?>