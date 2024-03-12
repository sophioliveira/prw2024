<?php
list ($A, $B, $C) = explode(" ", readline());
if($A + $B > $C && $C + $B > $A && $C + $A > $B){
    $per = $A + $B + $C;
    $per = number_format($per, 1, ".", "");
    echo "Perimetro = $per\n";
}
else{
    $area = (($A + $B) * $C)/2;
    $area = number_format($area, 1, ".", "");
    echo "Area = $area\n";
}
?>