<?php

/**
 * Bucle while
 * son importantes para repetir codigo x veces mientras una condición sea verdadera
 * 
 */

 $num = 0;

 while($num <= 100) {
    echo "<p>$num</p>";

    if ($num != 100){
        echo ", ";
    }

    $num++;
 }

?>