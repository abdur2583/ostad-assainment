<?php
function fibonacci_series( $old, $new, $end ) {
    /* 
    !!!!!!!!!!!!????????????
    if($old>100){
        break;
    } */
    static $start;
    $start = $start ?? 1;
    if ( $start > $end ) {
        return;
    }
    $start++;
    echo $old . "  ";
    $_tem = $old + $new;
    $old = $new;
    $new = $_tem;

    fibonacci_series( $old, $new, $end );
}
fibonacci_series( 0, 1, 10 );