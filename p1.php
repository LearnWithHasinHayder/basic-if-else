<?php 
$firstName  = "John";
$lastName = "Doe";
$title = "Mr.";
$age = 25;

// echo "His Name is ".$firstName . " " . $lastName;

$output = sprintf("His Name is %s %s %s, and his age is %d", $title, $firstName, $lastName, $age);

echo $output;