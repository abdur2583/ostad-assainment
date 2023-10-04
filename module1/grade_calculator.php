<?php
$test_1 = 80;
$test_2 = 80;
$test_3 = 80;

$average = ( $test_1 + $test_2 + $test_3 ) / 3;


switch ( true ) {
case $average >= 80 &&  $average <=100;
    echo "the grade is A+";
    break;
case $average >= 70 &&  $average <=79;
    echo "the grade is: A";
    break;
case $average >= 60 &&  $average <=69;
    echo "the grade is: A-";
    break;
case $average >= 50 &&  $average <=49;
    echo "the grade is: B";
    break;
case $average >= 33 &&  $average <=39;
    echo "the grade is: C";
    break;
case  $average >= 0 &&  $average <=32;
    echo "the grade is: F";
    break;
    default ;
    echo "please enter value between 0 to 100";
}
