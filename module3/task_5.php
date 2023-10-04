<?php

/* Task 5: Password Generator
Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
 */
// this is my own code 
 function generatePassword( $length  ) {
    $lengthOfString = strlen($length);
    //$match =  preg_match('/!@#%&()_/',$length);
    if($lengthOfString == 12 ){
        $passW = str_shuffle($length);
        echo $passW;
    }

}
$string = "a3je934*31es";
generatePassword($string);

echo PHP_EOL;
// --- this code I tried from the internet
// Function to generate password from
// given string
function get_password( $str, $len  ) {

    // Variable $pass to store password
    $pass = "";

    // Variable $str_length to store
    // length of the given string
    $str_length = strlen( $str );

    // Check if the $len is not provided
    if ( $len == $str_length ) {
        $len = $str_length;
    }

    // Shuffle the string
    $pass = str_shuffle( $str );

    // Extract the part of string
    $pass = substr( $pass,0, $len );

    return $pass;
}

// Print password of length 12 from
// the given string
//$str = "GeeksForGeek";
//echo get_password( $str ,12) . "\n";







?>
