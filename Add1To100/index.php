<?php
//adding number 1 to 100
$result = 0;
for ($i = 0; $i <= 100; $i++) {
    $x = $result + $i;
    echo $result . "+" . $i . "=" . $x . "<br>";
    $result += $i;
}
echo "Total Result"." ".$result;
