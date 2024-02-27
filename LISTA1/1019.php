<?php
    $T = intval(readline());
    $H = intval($T/3600);
    $T %= 3600;
    $M = intval($T/60);
    $S = $T % 60;
    
    echo "$H:$M:$S\n"
?>