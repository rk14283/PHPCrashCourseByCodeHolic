<?php

// Declaring numbers
$a = 5; 
$b = 4; 
$c = 1.2; 
// Arithmetic operations
echo ($a + $b) * $c;
echo $a - $b.'<br>';
echo $a * $b.'<br>';
echo $a / $b.'<br>';
echo $a % $b.'<br>'; //modulo 
// Assignment with math operators
/*
$a +=$b; echo $a.'<br>'; //9
$a -=$b; echo $a.'<br>'; //1
$a *=$b; echo $a.'<br>'; //20
$a /=$b; echo $a.'<br>'; //1
$a %=$b; echo $a.'<br>'; //1
*/
// Increment operator
echo $a++.'<br>'; //5 
echo ++$a.'<br>'; //7 
// Decrement operator
echo $a--.'<br>'; //7 
echo --$a.'<br>'; //5 
// Number checking functions
is_float(1.25);  //true 
is_double(1.25); 
is_int(5); //true
echo is_numeric("3.45").'<br>'; //true, it understands the value of string 
echo is_numeric("3g.45").'<br>'; //false and remember it is 1 and empty string as output  
// Conversion
$strNumber = '12.34'; 
$number = (int)$strNumber; 
$number = intval ($strNumber);
$number = floatval ($strNumber); 
var_dump($number); 
// Number functions
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';
// Formatting numbers
$number = 123456789.12345; 
echo number_format($number, 2, '.', ','); 
// https://www.php.net/manual/en/ref.math.php
