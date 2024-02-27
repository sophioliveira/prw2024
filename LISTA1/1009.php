<?php
   $V = strval(readline());
   $SF = doubleval(readline());
   $MT = doubleval(readline());
   $T = (($MT * 15)/100) + $SF;
   $SF = number_format($SF, 2, ".", "");
   $MT = number_format($MT, 2, ".", "");
   $T = number_format($T, 2, ".", "");
   echo "TOTAL = R$ $T\n";
?>