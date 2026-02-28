<?php
echo "p1<br>";
echo "Write a PHP script to display a simple message using echo/print and demonstrate variables and data types using the var_dump() function.<br>";
echo "Name : CHAUDHARU RUDRA <br>";
echo "Enrollment Number : 24082291090<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";





// Display simple message using echo
echo "Welcome to PHP Programming<br>";
// Declare variables of different data types
$name = "CHAUDHARU RUDRA"; // String
$age = 20; // Integer
$salary = 25000; // Float
$isStudent = true; // Boolean
// Display variables and their data types
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Salary:" . $salary . "<br>";
echo "is Student:" . $isStudent . "<br><br>";
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($salary);
echo "<br>";
var_dump($isStudent);
?>