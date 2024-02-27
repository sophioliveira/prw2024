<?php
    $A = doubleval(readline());
    $B = doubleval(readline());
    $M = ((3.5 * $A) + ( 7.5 * $B)) / 11;
    $M = number_format($M, 5, ".", " ");
    
    echo "MEDIA = $M\n"
?>