<?php

class Posts{

    public $post;
    public $hasPosts = true;

    function __construct($post){
        $this->post = $post;
    }

    function hello(){
        echo "hello";
    }
}
$post1 = new Posts("This is the first posts");
foreach ($post1 as $key => $value) {
    echo $key . ' => ' . $value;
}

echo PHP_EOL;

var_dump($post1);