<?php

/*
$integerVar = 100;
$floatVar = 9.23;
$stingVar = "Hello Onik!";
$boolVar = true;

echo $integerVar . "<br>";

echo $floatVar . "<br>";

echo $stingVar . "<br>";

echo $boolVar . "<br>";

// Example 2

$age = 25;

$_username = "jhone";
$myName123 = "Alice";
$my_vr = "example";

echo $age . "<br>";
echo $_username . "<br>";
echo $my_vr . "<br>";


// example 3

$golbalVar = 80;

function myFunction(){
    $localVar = 50;
    global $golbalVar;
    echo "Local var : " . $localVar . "<br>";
    echo "Global var inside function: " . $golbalVar . "<br>";
}

myFunction();

// example 4

$quantity = 5;
$price = 9.95;
$productName = "MANGO";
$isAvailable = true;

echo "$quantity $productName available at $price <br>";
echo "It Is available?<br>" . ($isAvailable ? "yes" : "No");


// EXAMPLE 5

$counter = 10;

$counter = $counter + 5;
$counter++;
$counter += 1;

echo "<br>Counter : $counter<br>";

 // example 5 

 $golbalName = "I'm golbal Superstar!";

 function myName(){

        global $golbalName;
        echo "Inside Function : $golbalName<br>";

 }

 myName();

 echo "Outside Function : $golbalName<br>";


 // example 6 

 $age = 25;
 $convartedAge = (int) $age;
  $height = "5.9";
  $convertedHeight = (float) $height;

  echo "convertedAge : $convartedAge (type: " . gettype ($convartedAge) . ") <br>";
  echo "convertedHeight : $convertedHeight (type: " . gettype ($convertedHeight) . ") <br>";


  // example 7

  $first_name = "Devid";
  $last_name = "Beckham";
  $full_name = $first_name . " " . $last_name;

  echo "Full Name : $full_name <br>";


  //example 8

  $temperature = 25;

  $temperature = $temperature + 1;
  $temperature -= 5;

  echo "Temperature : $temperature<br>";

// example 9

$golbalVar = "Global";

function local(){
    $localScope = "local Variable";
    global $golbalVar;
    echo "Inside Function : $golbalVar and $localScope <br>";
}

local();

echo "Outsite Function : $golbalVar<br>";


//Example 10

$studentInfo = array("name" => "alex", "age" => 22, "score" => 85 );

echo "Name : " . $studentInfo["name"] . "<br>";
echo "Age : " . $studentInfo["age"] . "<br>";
echo "Score : " . $studentInfo["score"]. "<br>";


$text = "hello" . ", World";

echo "Text : $text <br>"; */


// $age = 8;

// $status = $age < 18 ? "minor" : "Adult";

// echo $status;

$number = 5;
$message = $number>10?($number>=100? "number is greater than or equal 100" : "number is less than 100 but greater than 10") : ($number>5?"Number is less than 5" : "number is greater or equal 5 but less than 10");

echo $message;

?>