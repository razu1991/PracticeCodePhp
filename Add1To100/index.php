<?php

//example: left partial piramid
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br />";
}


//example: full piramid
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = $i; $j > 0; $j--) {
        echo $j;
    }
    echo "<br>";
}

//example: right piramid
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "*";
    }
   
    echo "<br>";
}
?>