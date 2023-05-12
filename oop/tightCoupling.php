<?php

class Course{
public$cid;
public $lidObj;
public $qidObj;

function _construct($cid, $lid, $qid){
$this->cid = $cid;
$this->lidObj = new Lesson($lid);
$this->qidObj = new Quiz($qid);
    }
}

class Lesson extends Course{
public $lid;
function  __construct($lid){
$this->lid = $lid;
}
function showLessons(){
    echo " Here are the lessons" . PHP_EOL;
}
}

class Quiz extends Course{

}

$course = new Course(1,100, 200);
$course->$lidObj->showLessons();

?>