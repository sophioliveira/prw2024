<?php
    $P = 3.14159;
    list($A, $B, $C) = explode (" ", readline());
   
   $TRI = ($A * $C)/2;
   $CI = $P * ($C * $C);
   $TRA = (($A + $B)*$C)/2;
   $Q = $B * $B;
   $R = $A * $B;
    $TRI = number_format($TRI, 3, ".", "");
    $CI = number_format($CI, 3, ".", "");
    $TRA = number_format($TRA, 3, ".", "");
    $Q = number_format($Q, 3, ".", "");
    $R = number_format($R, 3, ".", "");
    
    echo "TRIANGULO: $TRI\n";
    echo "CIRCULO: $CI\n";
    echo "TRAPEZIO: $TRA\n";
    echo "QUADRADO: $Q\n";
    echo "RETANGULO: $R\n";
?>