<?php
    $A = doubleval(readline());
    $B = doubleval(readline());
    $C = doubleval(readline());
    $M = ((2 * $A) + (3 * $B) + (5 * $C)) / 10;
    $M = number_format($M, 1, ".", " ");
    
    echo "MEDIA = $M\n"
?>