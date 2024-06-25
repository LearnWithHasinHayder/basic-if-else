<?php 
$number = 10;
$remainder = $number % 2;

match($remainder){
    0 => printf("The number %d is even", $number),
    1 => printf("The number %d is odd", $number),
    default => printf("Invalid number")
};

