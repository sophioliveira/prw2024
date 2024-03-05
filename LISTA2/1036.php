<?php
list ($a, $b, $c) = explode (" ", readline());
 $D = ($b * $b) - (4 * $a * $c);
 if(($a == 0) or (sqrt($D) < 0)){
     echo "Impossivel calcular\n";
 }
 elseif ($D > 0 && $a != 0)
 {
     $x1 = ((-$b + (sqrt($D)))/(2 * $a));
     $x2 = ((-$b - (sqrt($D)))/(2 * $a));
     $x1 = number_format ($x1, 5, ".", "");
     $x2 = number_format ($x2, 5, ".", "");
     echo "R1 = $x1\n";
     echo "R2 = $x2\n";
 }
 else{
     echo "Impossivel calcular\n";
 }
?>