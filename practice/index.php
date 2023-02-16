<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
<script src="./main.js"></script>
 <h3>
  
   <?php

//  echo "<h1> Hello <h1>"

// echo 56 + 45;
// echo "<br>";
// echo 56-45;
// echo "<br>";
// echo 56*45;
// echo "<br>";
// echo 56/45;
// echo "<br>";



// echo 45-34*45/421-45;
// echo "<br>";
// echo (5+5)*10;
// echo "<br>";

// $number=12;
// $Number=24;

// echo $number + $Number;

// $numberList = array(23,64,267,478,267,8765,345,'5345', 345, '<h1>Hello</>');

// print_r($numberList);

// echo $numberList[0];

// $number = array (10, 20, 49);
// $number = array ('juanita','maria','jose');
// print_r ($number)

// echo $number[2] . "<br>";
// echo "<br>";

// $names = array ("first_name" => 'Edwin' , "last_Name" => ' Diaz');

// print_r ($names);

// echo $names['first_name'] . $names['last_Name'];

// $number1= 10 ;
// $number2 = 20 ;

// echo $number1 + $number2 . "<br>";

// $lists = array(23,24,543,234,7654,3456);

// $lists_assoc = array("number" => 10);

// echo $lists['0'] . "<br>";

// echo $lists_assoc['number'] . "<br>";

// Comparison  and Logical Operators

// if (4 === 4 && 5 < 10) {
//   echo "it is true";
// }
// ______________________
// Switch Statements 
// $name = "Riddle";
// switch ($name) {

//   case 'john':
//    echo 'i am John';
//     break;

//     case 'steve':
//      echo 'i am steve';
//       break;

//       case 'Riddle':
//         echo 'i am Riddle';
//         break;
  
//   default:
//    echo "whats my name";
//     break;
// }
// ______________________
// While LOOPS
// $counter = 0;
// while($counter <= 10) {
//   echo $counter;
//   $counter++;
  // $counter = $counter + 1;
// }

// For LOOP
// for ($counter=0; $counter < 10; $counter++) { 
//   echo $counter . "<br>";
// }

// Foreach LOOP
// $numbers= array(234,230,233,345,256);
// foreach ($numbers as $number) {
//   echo $number . "<br>";
// }

// Practice section 
// Step 1:make an if else statement with elseif and else to finally display
// string saying, I Love PHP
// Step 2: make a forloop that displays 10 $numbers
// Step 3: make a switch statement that tests against one 
// condition with 5 cases

// Functions
// function init(){

//   say_something();
//   echo "<br>";
//   calculate();

// }

// function say_something(){

//  echo  "far above principalities and powers";

// }
//  function calculate (){

//   echo 1000 + 1000 . " years ago";


//  }

//  echo init();

// function greeting(){
// echo "Hello customer how may we be of service to you today";

// }
// greeting();

// function addNumbers($num1, $num2){

//   $sum = $num1 + $num2;

//   echo $sum;
  
//   }
//   addNumbers(50, 50);

// function addNumbers($num1, $num2){
// $sum = $num1 + $num2;
// return $sum;
// }
// $result = addNumbers(12, 12);
// echo $result;
// echo "<br>";
// $result = addNumbers(10, $result);
// echo $result;
// echo "<br>";
// $result = addNumbers(20, $result);
// echo $result;
// echo "<br>";

// Global variable and scope
// $x = "outside";
// function convert(){
//   global $x;
//   $x = "inside";
// }
// echo $x;
// echo "<br>";
// convert();
// echo $x;
// echo $x

// Constants
// $number = 10;
// echo $number; . "<br>"

// define("NAME", 1000)
// echo NAME;
// Practice
// Step1: Define a function and make it return a calculation of 2
// Numbers
// step2: Make a function that passes parameters and call it using
// parameter values

// Math Function
// echo pow(2, 7);
// echo "<br>";
// echo rand(1, 1000);
// echo "<br>";
// echo sqrt(100);
// echo "<br>";
// echo ceil(4.6);
// echo "<br>";
// echo floor(4.6);
// echo "<br>";
// echo round(4.5);

// String Function
// $string = "Hello student do you like the class";
// echo strlen($string);
// echo "<br>";
// echo strtoupper($string);
// echo "<br>";
// echo strtolower($string);

// Array Function
// $list = [123,234,235,122,332,345,325,256,340];
// echo max($list);
// echo "<br>";
// echo min($list);
// echo "<br>";
// sort ($list);
// echo print_r($list);
// echo "<br>";

// Practice Section 5
// step1; use a pre-built math function here and echo it
// step2; use a pre-built string function here and echo it
// step3; use a pre-built Array function here and echo it

// FORMS
// if(isset($_POST['submit'])) {

//   $name = array("edwin", "peter", "fred", "golden", "silver");
//   $minimum = 5;
//   $maximum = 10;
  
// $username = $_POST['username'];
// $password = $_POST['password'];

// echo "hello" . $username;
// echo "Your password is" . $password;

// if(strlen($username) < $minimum){
//   echo "User has to be longer than five";
// }
// if(strlen($username) > $maximum){
//   echo "User cant be longer than 10";
// }

// if(!in_array($username, $name)) {
// echo "sorry no network";
// }
// else {
//   echo "welcome great one";
// }

// }

// if(isset($_POST['submit'])) {

//   $username = $_POST['username'];
//   $password = $_POST['password'];
// $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
// if($connection) {
//   echo "we are connected";
// }
// else {
//   echo die("Database connection failed");
// }

// if ($username && $password) {
//   echo $username;
//   echo $password;
// }
// else {
//   echo "NOoooO!!!";
// }
//   echo "yes we got it";
// }
// if(isset($_POST['submit'])) {

//   $username = $_POST['username'];
//   $password = $_POST['password'];
//   $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
//   if($connection) {
//   echo "we are connected";
//   }
//   else {
//   echo die("Database connection failed");
//   }
  
//   $query = "INSERT INTO users(username,password)";
//   $query .= "VALUES ('$username', '$password')";
  
//   $result = mysqli_query($connection, $query);
  
//   if (!$result) {
//         die('Query FAiled' . mysqli_error());
//   }

//   }

// $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
// if($connection) {
//   echo "we are connected";
// }
// else {
//   echo die("Database connection failed");
//   }


// include "db.php";
  
//   $query = "SELECT * FROM users";
//   $result = mysqli_query($connection, $query);
//   if (!$result) {
//     die('Query FAiled' . mysqli_error());
//   }
// ?

// <!--php
// while ($row = mysqli_fetch_assoc($result)) {
//   ?
// <pre> -->
//   ?php -->
//   print_r($row);
//   ?
// </pre> -->
// <?php

// }
// ?>
  <!-- <form action="index.php" method="post">
    <input type="text" placeholder="Enter Username" name= username><br>
    <input type="password" placeholder="Enter Password" name= password> <br>
    <input type="submit" name=submit>
  </form>
</body> -->