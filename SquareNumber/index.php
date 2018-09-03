<?php

/*
 * Description: 1 month number square & total. 
 * Date: 03-09-2018 (DD/MM/2018)
 */
//example: square number every day double number in one month
$month = 30;
$x = 1;
for ($i = 1; $i <= $month; $i++) {
    echo $x . "<br>";
    $x += $x;
}
?>