<?php

class FileHelper {

function hasData($filename) : bool{

    if (!file_exists($filename)){
        echo "$filename doesnt exist" . PHP_EOL;
        return false;
    }
    $content = file_get_contents($filename);
    if(empty($content)){
        return false;
    }else{
        return true;
    }
}


}
if(FileHelper::hasData("Test.txt")){
    echo "Data Found";
}else{
    echo " No Data Found";
}

?>