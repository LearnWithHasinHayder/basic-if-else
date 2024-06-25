<?php

$year = 1600;

$leapYear = $year % 400 == 0 ? true : ($year % 100 == 0 ? false : ($year % 4 == 0 ? true : false));

if($leapYear){
    echo "$year is a leap year";
}else{
    echo "$year is not a leap year";
}