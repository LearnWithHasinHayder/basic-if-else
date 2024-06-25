<?php 
$number = 16;
$evenOrOdd = '';

if($number % 2 == 0){
    $evenOrOdd = 'even';
}else{  
    $evenOrOdd = 'odd';
}

printf("The number %d is %s", $number, $evenOrOdd);