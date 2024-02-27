<?php
    $VAL = intval(readline());
    $CED = [100, 50, 20, 10, 5, 2, 1];
    echo "$VAL\n";
    foreach ($CED as $CEDU) {
        $qntCED = intval($VAL / $CEDU);
        $VAL %= $CEDU;
        $CEDU = number_format($CEDU, 2, ",", "");
        
        
        echo $qntCED . " nota(s) de R$ $CEDU\n";
    }
?>