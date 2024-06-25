<?php 

$number = 17;
$remainder= $number % 2;

switch($remainder){
    case 0:
        echo "The number $number is even";
        break;
    case 1:
        echo "The number $number is odd";
        break;
    default:
        echo "Invalid number";
}
