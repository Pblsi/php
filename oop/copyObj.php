<?php

class Posts{

    public $post;
    public $hasPosts = true;

    function __construct($post){
        $this->post = $post;
    }
}

function copyObject(Posts $obj1, Posts $obj2){
    $obj2->post = $obj1->post;
    $obj2->hasPosts = $obj1->hasPosts;
}

$post1 = new Posts("This is the first post");
$post2 = new Posts("This is the second post");

copyObject($post1, $post2);
echo $post2->post;