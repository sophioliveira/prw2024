<?php
    list($P1, $N1, $V1) = explode(" ", readline());
    list($P2, $N2, $V2) = explode(" ", readline());

    $V = ($N1*$V1) + ($N2*$V2);
    $V = number_format($V, 2, ".", "");
    
    echo "VALOR A PAGAR: R$ $V\n";
?>