<?php
/*
Task 1: String Manipulation
Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:
Convert the string to all lowercase.
Replace "brown" with "red" in the string.
Print the modified text. */

$text = "The quick brown fox jumps over the lazy dog.";

function parameterCheck( $text ) {
    echo $text . "\n";
    echo strtolower( $text ) . "\n";
    $replace_word = str_replace( "brown", "red", $text );
    echo $replace_word;
}
parameterCheck( $text );
/*
Task 2: Array Manipulation
Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array */
echo PHP_EOL;
$numbers = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );
function removeEvenNumbers( $n ) {
    return ( $n % 2 ) == 1;
}
$odd_number = array_filter( $numbers, 'removeEvenNumbers', );
print_r( $odd_number );
/*
Task 3: Array Sorting
Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array. */
echo PHP_EOL;

$grades =[85, 92, 78, 88, 95];

function sortArray($grades){
    return $grades;
}
rsort($grades);
print_r($grades);




