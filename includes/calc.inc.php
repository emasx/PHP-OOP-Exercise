<?php
declare(strict_types = 1);
include 'class-autoload.inc.php';
// Grab the data from the form(num1,oper,num2) and then we run them using some of the class methods that we are going to create inside out calc.class.php 

//(because this is the class that we load up once we click the submit button)

$oper = $_POST['oper'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$object = new Calc($oper, (int)$num1, (int)$num2);

try {
    echo $object->calculator();
} catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
}

?>