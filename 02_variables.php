<?php

// What is a variable
//php is dynamic type
//it uses semi-colons unlike python and JS 


// Variable types
/*String 
Integer 
Float/double  
Null 
Array 
Object 
Resource 
*/


// Declare variables
$name = "Rohan"; 
$age = 27; 
$isMale = true; //true displays 1 and false displays an empty string 
$height = 1.87; 
$Salary = null; //null is printed also as empty string 
// Print the variables. Explain what is concatenation
echo $name.'<br>'; 
echo $age. '<br>'; 
echo $isMale. '<br>'; 
echo $height. '<br>' ; 
echo $Salary.'<br>';

// Print types of the variables
echo gettype($name).'<br>'; 
echo gettype($age).'<br>'; 
echo gettype($isMale).'<br>'; 
echo gettype($height).'<br>';
echo gettype($Salary).'<br>'; 
// Print the whole variable
//usdeful for dealing with array and objects 
var_dump($name,$age,$isMale,$height,$Salary); 
// Change the value of the variable
$name = false; 
// Print type of the variable
echo gettype($name).'<br>';
// Variable checking functions
echo is_String($name); //false 
echo is_string($name); //false 
echo is_int($age); 
echo is_bool($isMale); 
echo is_double($height); 
// Check if variable is defined
echo isset($name); //true 
echo isset($address); //false 
// Constants
define('PI', 3.14); 
echo PI.'<br>'; 
// Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';
