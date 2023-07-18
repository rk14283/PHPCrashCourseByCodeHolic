<?php

$age = 0;
$salary = 300000;

// // Sample if
// if ($age  ===20){
//     echo "1"; 
// }
// // Without circle braces
// if ($age  ===20) echo "1"; 

// // Sample if-else
// if ($age>20){
//     echo "1"; 
// }
// else {
//     echo"2";
//}
// Difference between == and ===
//Similar to JS
$age ==20; //true
$age == '20'; //true

$age === 20; //true 
$age === '20'; //false 

// if AND
if($age>20 || $salary===300_000){
    echo "Do something"; 
}
// if OR

// Ternary if
//ternary operators are hard to understand 
echo $age<22? 'Young':'Old'; 

// Short ternary
$myAge = $age ?:18; 
echo '<pre>';
var_dump($myAge);
echo'</pre>'; 
// Null coalescing operator
$myName = isset($name) ? $name: 'John';
$myName =$name ?? 'John'; 
// switch
$userRole = 'webadmin';
switch($userRole){
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user'; 
        break; 
    default:
    echo 'Invalid role';     
}