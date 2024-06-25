<?php
$year = 1700;
$leapYear = false;

if ($year % 400 == 0) {
    $leapYear = true;
} elseif ($year % 100 == 0) {
    $leapYear = false;
} elseif ($year % 4 == 0) {
    $leapYear = true;
} else {
    $leapYear = false;
}

if ($leapYear) {
    echo "$year is a leap year";
} else {
    echo "$year is not a leap year";
}