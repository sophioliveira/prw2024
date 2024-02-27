<?php
    $N = intval(readline());
    $H = intval(readline());
    $V = doubleval(readline());
    $S = $H * $V;    
    $S = number_format($S, 2, ".", "");
    echo "NUMBER = $N\n";
    echo "SALARY = U$ $S\n";
?>