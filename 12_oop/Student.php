<?php 
require_once "Person.php";
class Student extends Person{
public String $studentId; 

public function __construct($name, $surname, $studentId)
{
    $this->age = 18; 
    $this->studentId = $studentId; 
    parent::__construct($name,$surname);
}
}