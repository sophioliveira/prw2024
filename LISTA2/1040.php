<?php
   list ($N1, $N2, $N3, $N4) = explode (" ", readline());
    $media = 0;
    $media = number_format($media, 1, ".", ""); 
   if($N2 > 4){
   $media = (($N1 * 2) + ($N2 * 3) + ($N3 * 4)  + ($N4 * 1))/10.1;
   $media = number_format ($media, 1, ".", "");
   echo "Media: $media\n";
   }
   else{
       $media = (($N1 * 2) + ($N2 * 3) + ($N3 * 4)  + ($N4 * 1))/10;
   $media = number_format ($media, 1, ".", "");
   echo "Media: $media\n";
   }
   if($media >= 7.0)
   {
       echo "Aluno aprovado.\n";
       $media = number_format ($media, 1, ".", "");
   }
   elseif ($media >= 5.0)
   {
       $media = number_format ($media, 1, ".", "");
       echo "Aluno em exame.\n";
       $Ex = floatval(readline());
       $Ex = number_format($Ex, 1, ".", "");
       echo "Nota do exame: ".$Ex."\n";
       if ($Ex + $media / 2.0 > 5.0)
       {
           echo "Aluno aprovado.\n";
       }
       else 
       {
           echo "Aluno reprovado.\n";
       }
       $media = number_format (($media + $Ex)/2.0, 1, ".", "");
       echo "Media final: $media\n";
   }
   else
   {
       echo "Aluno reprovado.\n";
   }
?>