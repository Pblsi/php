<?php
class Posts{

    
    
}
function __construct($post){
    $this->post = $post;
}

//Identity Operator . ===
function compare1(&$obj1, &$obj2){
    if ($obj1 === $obj2){
        return true;
    }else{
        return false;
    }

}

//Comparison Operator . ==
function compare2(&$obj1, &$obj2){
    if ($obj1 == $obj2){
        return true;
    }else{
        return false;
    }
}

$post1 = new Posts("this is the first post");
$post2 = new Posts("this is the first post");

echo compare1($post1, $post2) ? "SAME" : "DIFFERENT";
echo PHP_EOL;
$post3 = $post1;
echo compare1($post1, $post3) ? "SAME" : "DIFFERENT";
$post4 = clone $post1;
echo PHP_EOL;
echo compare1($post1, $post4) ? "SAME" : "DIFFERENT";
echo ".................." . PHP_EOL;

echo compare2($post1, $post2) ? "SAME" : "DIFFERENT";
ECHO PHP_EOL;

?>