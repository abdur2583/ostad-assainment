<?php
$n = 55;
$r = $n % 2;

/* if ( $r = 0 ) {
    echo "$n the Number is even";
} else {
    echo "$n the Number is odd";
} */

$result = ( $r = 0 ) ? "$n the Number is even" : "$n the Number is odd";
echo $result;