<?php
    $r = floatval(readline());
    $p = 3.14159;
    $A = $p * $r*$r;
    $A = number_format($A, 4, ".", "");
    echo "A=$A\n";
?>