<?php

// while
// while (true){

// }
// Loop with $counter
//$counter =0;
// while($counter<10){
//     echo $counter.'<br>';
//     // if($counter ===5){
//     //     break;
//     // }
//     $counter++; 
// }
// do - while
//In do while condition is printed at-least once
// do{
//     echo $counter.'<br>';
//     $counter++; 
// }//in a while loop if this is changed to 0, it will never be printed 
// while ($counter<0); 
// for
for($i=0; $i<10;$i++){
    echo $i.'<br>'; 
}
// foreach
$fruits = ["Banana", "Apple", "Orange"]; 
foreach($fruits as $i=>$fruit){
    echo $i. ' '. $fruit.'<br>';  
 }
// Iterate Over associative array.
$person  = [
    'name' => 'Brad',
    'Surname'=> 'Traversy',
    'age' => 30,
    'hobbies'=>['Tennis', 'Video Games']
]; 
foreach($person as $key =>$value){
    //array to string conversion would create an error without implode 
    if(is_array($value)){
        echo $key . ' '. implode(",", $value).'<br>'; 
    }else{
        echo $key . ' '.$value.'<br>';         
    }

}
