<?php
    list($A, $B, $C) = explode(" ", readline());
    $MAB = ($A + $B + abs($A - $B))/2;
    $MAI = ($MAB + $C + abs($MAB - $C))/2;
    
    echo "$MAI eh o maior\n";
?>