<?php

$temperature = 44;
switch ( $temperature ) {
case $temperature >= 41;
    echo "$temperature degree celsius It's Hot.";
    break;
case $temperature >= 25 && $temperature <= 40;
    echo "$temperature degree celsius It's warm.";
    break;
case $temperature >= 12 && $temperature <= 24;
    echo "$temperature degree celsius It's cool.";
    break;
case $temperature >= 4 && $temperature <= 11;
    echo "$temperature degree celsius It's freezing.";
    break;

}
