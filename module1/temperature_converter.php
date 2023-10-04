<?php
$celsius = 33;
$fahrenheit  = 84;

$celsiusToFahrenheit = ($celsius*1.8)+32;
$fahrenheitToCelsius = ($fahrenheit-32)*(5/9);

$fahrenheitToCelsius_result = sprintf("%.2f",$fahrenheitToCelsius);

echo "{$celsius} Celsius  To Fahrenheit conversion: ". $celsiusToFahrenheit;
echo "\n";
echo "{$fahrenheit}Fahrenheit to celsius  conversion: ". $fahrenheitToCelsius_result;

