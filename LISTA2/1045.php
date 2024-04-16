<?php
list ($a, $b, $c) = explode (" ", readline());
$t = array($a, $b, $c);
rsort($t);
$A = $t[0];
$B = $t[1];
$C = $t[2];
if ($A >= ($B + $C)){
    echo "NAO FORMA TRIANGULO\n";
}
else{
if (($A ** 2) == (($B ** 2) + ($C ** 2))){
    echo "TRIANGULO RETANGULO\n";
}
else if (($A ** 2) > (($B ** 2) + ($C ** 2))){
    echo "TRIANGULO OBTUSANGULO\n";
}
else if (($A ** 2) < (($B ** 2) + ($C ** 2))){
    echo "TRIANGULO ACUTANGULO\n";
}
else if ($A == $B && $A == $C){
    echo "TRIANGULO EQUILATERO\n";
}
else if ($A == $B && $A != $C or $A == $C && $A != $B or $B == $C && $B != $A){
    echo "TRIANGULO ISOSCELES\n";
}
return;
}
?>