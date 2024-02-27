<?php
    $X = intval(readline());
    $Y = floatval(readline());
    $TG = $X / $Y;
    $TG = number_format($TG, 3, ".", "");
    echo "$TG km/l\n";
?>