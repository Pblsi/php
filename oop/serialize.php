<?php

class Posts{

    
    function __construct($post){
        $this->post = $post;
    }
}

$post1 = new Posts("This is the serialized Post");
// $serialized = serialize($post1);
// echo $serialized;
// file_put_contents("posts.txt", $serialized);

$unserialized = file_get_contents("posts.txt");
$post2 = unserialize($unserialized);
echo $post2->post;
?>