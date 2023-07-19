<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
// $resource = curl_init($url);
// curl_setopt($resource,CURLOPT_RETURNTRANSFER,true); 
// $result = curl_exec($resource); 
// curl_close($resource);

// $code = curl_getinfo($resource,CURLINFO_HTTP_CODE);
// //curl_getinfo($resource); 

// echo '<pre>';
// var_dump($code);
// echo '</pre>';

// echo $result; 
// Get response status code

// set_opt_array

// Post request

$resouce =curl_init();
$user = [
    'name'=>'John Doe',
    'username' =>'john',
    'email' =>'john@example.com'
]; 

$resource =curl_init();
curl_setopt_array($resouce, [
CURLOPT_URL =>$url, 
CURLOPT_RETURNTRANSFER =>true,
CURLOPT_POST =>true, 
//without this there will be a wierd response 
CURLOPT_HTTPHEADER =>['content-type: application/json'],

CURLOPT_POSTFIELDS => json_encode($user)
]);
$result = curl_exec($resouce);
curl_close($resouce); 
echo $result; 
