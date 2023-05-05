<?php

class Files
{

    function displayContent($filename){
if(!file_exists($filename)){
    echo "$filename does not exist" . PHP_EOL;
    return;
}
    echo file_get_contents($filename) . PHP_EOL;
}

function getContent($filename) : string{
    if(!file_exists($filename)){
        echo "$filename does not exist" . PHP_EOL;
        return "";
    }
    $content = file_get_contents($filename);
    return $content  .PHP_EOL;
}
}
$file1 = new Files();
$file1->displayContent("Test.txt");
echo "here is your file content: " . $file1->getContent("Test.txt");


?>