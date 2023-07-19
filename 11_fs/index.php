<?php
// Magic constants
//prints current directory where file is located
echo __DIR__.'<br>';
echo __FILE__.'<br>'; 
echo __LINE__.'<br>';
// Create directory
//mkdir('test'); 
// Rename directory
//rename('test', 'test2');
// Delete directory
//rmdir('test2'); 
// Read files and folders inside directory
//. is current directory, and .. is parent directory 
$files = scandir('../');
echo '<pre>'; 
var_dump($files); 
echo '</pre>';
// file_get_contents, file_put_contents
//put something in the file 
echo file_get_contents('lorem.txt');
file_put_contents('sample.txt', 'someContent');

// file_get_contents from URL
// $usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users'); 
// echo $usersJson;
// $users = json_decode($usersJson, true); 
// echo '<pre>'; 
// var_dump($users); 
// echo '</pre>'; 
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
file_exists('sample.txt'); 
is_dir('test'); //false 
// is_dir
// filemtime
// filesize
// disk_free_space
// file