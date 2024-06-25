<?php 
$name = "John Doe";
$marks = 95;
$grade = '';
//grade 

if($marks>=90){
    $grade = 'A';
}else if($marks>=80){
    $grade = 'B';
}else if($marks>=70){
    $grade = 'C';
}else if($marks>=60){
    $grade = 'D';
}else{  
    $grade = 'F';
}

printf("Student %s has scored %d marks and his grade is %s", $name, $marks, $grade);
