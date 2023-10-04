<?php

/*
Task 4: Multidimensional Array
Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. */

$studentGrades  = array(
    "student_1" => array(60, 75,55),
    "student_2" => array(60, 65,85),
    "student_3" =>array(63, 45,55),
);

$get_value = $studentGrades["student_1"];
$n_count = count($get_value);

$get_value2 = $studentGrades["student_2"];
$n_count = count($get_value2);

$get_value3 = $studentGrades["student_3"];
$n_count = count($get_value3);

function sum($oldValue , $newValue){
    //return $oldValue  + $newValue;
           return $oldValue  + $newValue;  
}

$newSum = array_reduce($get_value,'sum');
$newSum2 = array_reduce($get_value2,'sum');
$newSum3 = array_reduce($get_value3,'sum');
$average = $newSum/$n_count;
$average2 = $newSum2/$n_count;
$average3 = $newSum3/$n_count;


printf("student 1: %s student 2: %s student 3: %s", $average, $average2, $average3 ); 

// I think this is not the right way to get average from the Multidimensional array, so its my question what could be the right way.



