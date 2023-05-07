<?php
// Data encapsulation Concept or design pattern is followed.
class Post{

    private $post ="";
    
   public function setPost($post){
        $this->post = $post;
    }
   public function getPost(){
        return $this->post;
    }
}

$post = new Post();
$post->setPost("this is a test post");
echo $post->getPost() . PHP_EOL;
?>