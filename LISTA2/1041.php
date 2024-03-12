<?php
list($x, $y) = explode (" ", readline());
$x = number_format($x, 1, ".", "");
$y = number_format($y, 1, ".", "");
if($x >= 0.1 && $y >= 0.1){
    echo "Q1\n";}
else if ($x <= -0.1 && $y >= 0.1){
    echo "Q2\n";}
else if ($x <= -0.1 && $y <= -0.1){
    echo "Q3\n";}
else if ($x >= 0.1 && $y <= -0.1){
    echo "Q4\n";}
else if ($x == 0 && $y == 0){
    echo "Origem\n";}
else{
    if($x == 0 or $y == 0){
        if($x == 0){
            echo "Eixo x\n";}
            else{
                echo "Eixo y\n";}
    }
    else{
        echo "Origem\n";}}
?>