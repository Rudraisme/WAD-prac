<?php 
echo "p16<br>";
echo " Write a PHP script to demonstrate encapsulation using private data members and public getter and setter methods.<br>";
echo "Name : CHAUDHARU RUDRA <br>";
echo "Enrollment Number : 24082291090<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";





class Student { 
private $name; 
private $rollNo; 

// Setter method 
public function setData($n, $r) { 
$this->name = $n; 
$this->rollNo = $r; 
} 

// Getter method 
public function getData() { 
echo "Name: " . $this->name . "<br>"; 
echo "Roll No: " . $this->rollNo; 
} 
} 

// Creating object 
$obj = new Student(); 
$obj->setData("Garvit", 1051); 
$obj->getData(); 
?>