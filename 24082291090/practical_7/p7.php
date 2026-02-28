<?php 
echo "p7<br>";
echo "Write a PHP script to demonstrate user-defined functions with parameters and return values.<br>";
echo "Name : CHAUDHARU RUDRA <br>";
echo "Enrollment Number : 24082291090<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";





// Function with parameters and return value 
function addNumbers($a, $b) { 
$sum = $a + $b; 
return $sum;   // returning value 
} 
// Calling the function 
$result = addNumbers(10, 20); 
echo "The sum of 10 and 20 is: " . $result . "<br>"; 