<?php

class File{

    function displayContent($filename){
        // check if file exist
        if(!file_exists($filename)){
            
            echo "$filename doesnt exist" . PHP_EOL;
            return;
        }
        // else get the output and print
        echo file_get_contents($filename) . PHP_EOL;

    }

    function getContent($filename) : string{
   if(!file_exists($filename))
   {
    echo "$filename doesnt exist" . PHP_EOL;
    return "";
   }
//    load into variable and return
   $content = file_get_contents($filename);
   return $content;
    }
}

$file1 = new Files();
$file1->displayContent()




?>