<?php

// What is class and instance
require_once "Person.php";
require_once "Student.php";
$student = new Student('Brad', 'Traversy', 1); 
echo '<pre>';
var_dump($student);
echo '<pre>';
//person instance created from person class 
// $p = new Person("Brad", "Traversy");
// $p->setAge(30); 
// echo '<pre>';
// var_dump($p);
// echo '<pre>';
// echo $p->getAge();

// $p2 = new Person("John", "Smith");
// $p2->name='John';
// $p2->surname='Smith'; 
// var_dump($p2);
// echo '</pre>'; 
// echo Person::getCounter(); 
// Create Person class in Person.php

// Create instance of Person

// Using setter and getter