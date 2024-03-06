<?php
   list ($cod, $qnt) = explode (" ", readline());
   $t = 0;
   if($cod == 1 && $qnt > 0)
   {
       $t = $qnt * 4;
       $t = number_format ($t, 2, ".", "");
       echo "Total: R$ $t\n";
   }
   elseif ($cod == 2 && $qnt > 0)
   {
        $t = $qnt * 4.50;
        $t = number_format ($t, 2, ".", "");
       echo "Total: R$ $t\n";
   }
   elseif ($cod == 3 && $qnt > 0)
   {
       $t = $qnt * 5;
       $t = number_format ($t, 2, ".", "");
       echo "Total: R$ $t\n";
   }
    elseif ($cod == 4 && $qnt > 0)
   {
       $t = $qnt * 2;
       $t = number_format ($t, 2, ".", "");
       echo "Total: R$ $t\n";
   }
    elseif ($cod == 5 && $qnt > 0)
   {
       $t = $qnt * 1.50;
       $t = number_format ($t, 2, ".", "");
       echo "Total: R$ $t\n";
   }
?>