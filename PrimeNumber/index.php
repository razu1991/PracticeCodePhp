<?php

/*
 * Description: Find & check primary number
 * Date: 02-09-2018 (DD/MM/2018)
 */

//Example 01: Find primary numbers.

$primaryCheckTo = 100; //check primary number from 1 to 100;
for ($i = 1; $i <= $primaryCheckTo; $i++) {  //numbers to be checked as prime
    $counter = 0;
    for ($j = 1; $j <= $i; $j++) { //all divisible factors
        if ($i % $j == 0) {
            $counter++;
        }
    }
    //prime requires 2 rules ( divisible by 1 and divisible by itself)
    if ($counter == 2) {

        print $i . " is Prime <br/>";
    }
}

//Example 02: Check Is it prime or not

$checkPrime = 31;
$counter = 0;
for ($j = 1; $j <= $checkPrime; $j++) {
    if ($checkPrime % $j == 0) { //all divisible factors
        $counter++;
    }
}//prime requires 2 rules ( divisible by 1 and divisible by itself)
if ($counter == 2) {
    print "$checkPrime this is prime number";
}
?>