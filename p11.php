<?php
$age = 16;
$hasLicense = false;

// if($age<18){
//     echo "You are not eligible to drive";
// }else if($age>=18){
//     if($hasLicense){
//         echo "You are eligible to drive";
//     }else{
//         echo "You are not eligible to drive";
//     }
// }

// if ($age < 18) {
//     echo "You are not eligible to drive";
// } else if ($age >= 18 && $hasLicense == true) {
//     echo "You are eligible to drive";
// } else {
//     echo "You are not eligible to drive";
// }

// if ($age >= 18 && $hasLicense == true) {
//     echo "You are eligible to drive";
// } else {
//     echo "You are not eligible to drive";
// }

echo $age >= 18 && $hasLicense == true ? "You are eligible to drive" : "You are not eligible to drive";