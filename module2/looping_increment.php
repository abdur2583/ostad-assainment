<?php
// print even number using for loop
for ( $i = 2; $i <= 20; $i++ ) {
    if ( $i % 2 == 0 ) {
        echo $i. "  ";
    }
}
echo PHP_EOL;
// print even number using for function
function rangeOfNumber($a,$b){
    if($a>$b){
        return;
    }
    echo $a ."  ";
    $a+=2;
    rangeOfNumber($a,$b);
}
rangeOfNumber(2,20);
echo PHP_EOL;
//// print even number using for while
$i = 0;
while ( $i < 20 ) {
    $i += 2;
    echo $i . "  ";
}
echo PHP_EOL;
// print even number using for do while
$x = 2;
do {
  echo "The number is: $x <br>";
  $x+=2;
} while ($x <= 20);