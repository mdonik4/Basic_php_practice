 <?php

// <!--✅ Example: 0 -->

/*$integerVar = 42;
$floatVar = 3.12;
$stringVar = "Hello";
$boolVar = true;

echo $integerVar . "<br>";
echo $floatVar . "<br>";
echo $stringVar . "<br>";
echo $boolVar . "<br>";*/

//<!--✅ Example: 1 -->

/*$age = 25;
$_username = "jone";
$myName123 = "Sam";
$my_var = "example";

echo $age . "<br>";
echo $_username . "<br>";
echo $myName123 . "<br>";
echo $my_var . "<br>";*/

//<!--✅ Example: 2 -->

/*$globalVar = 100;

function myFunction(){

    $localVar = 50;
    global $globalVar;
    
    echo "Local Variable: " . $localVar . "<br>";
    echo "Golbal Variable inside function: " . $globalVar . "<br>";
}*/

//<!--✅ Example: 3 --> 

/*$globalVar = 100;     // Global variable

function myFunction() {
    $localVar = 50;   // Local variable within the function
    global $globalVar; // Accessing global variable within the function
    echo "Local Variable : " . $localVar . "<br>";
    echo "Global Variable inside function : " . $globalVar . "<br>";

}

myFunction();*/

 /*$quantity = 5;
 $price = 9.95;
 $productName = "widget";
 $isAvailable = false;
 
 echo " $quantity $productName available at % $price . <br>";
 echo "Is it avilable?<br>" . ($isAvailable?   "yes <br>" : "No <br>" );*/

 // Example 4

 /*$counter = 10;
 $counter = $counter + 5;
 $counter++;
 $counter+= 2;

 echo "counter : $counter<br>";*/


// ✔ example 5

$globalVar = "I'm Golbal Superstar!";

function printGolbal(){

    global $globalVar;

    echo "Inside function : $globalVar<br>";
}

printGolbal();

echo "Outside function : $globalVar<br>";

?>


