<?php 
echo "p12<br>";
echo " Write a PHP script to demonstrate the use of constructor and destructor in PHP.<br>";
echo "Name : CHAUDHARU RUDRA <br>";
echo "Enrollment Number : 24082291090<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";


class Demo {
    public function __construct() {
        echo "Constructor Called<br>";
    }

    public function __destruct() {
        echo "Destructor Called<br>";
    }
}

$obj = new Demo();

?>