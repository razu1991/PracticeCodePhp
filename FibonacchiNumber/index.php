<?php

/*
 * Description: Fibonacchi Number Sequest 10 times
 * Date: 03-09-2018 (DD/MM/2018)
 */

//Example 01: Find primary numbers.
$x = 0;
$y = 1;

for ($i = 0; $i <= 10; $i++) {
    $z = $x + $y;
    echo $z . "<br />";
    $x = $y;
    $y = $z;
}   