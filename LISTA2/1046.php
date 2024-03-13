<?php
list ($HI, $MI, $HF, $MF) = explode (" ", readline());
if ($HI > $HF && $MI > $MF){
    echo "O JOGO DUROU ". (24 - ($HI - $HF)) . " HORA(S) E " . (60 - ($MI - $MF)). " MINUTO(S)\n";
}
else if ($HI < $HF && $MI < $MF){
    echo "O JOGO DUROU " . ($HF - $HI) . " HORA(S) E" . ($MF - $MI) . " MINUTO(S)\n";
}
else if ($HI < $HF && $MI == $MF){
    echo "O JOGO DUROU " . ($HF - $HI) . "HORA(S) E 0 MINUTO(S)\n";
}
else if ($HI > $HF && $MI == $MF){
    echo "O JOGO DUROU ". (24 - ($HI - $HF)) . " HORA(S) E 0 MINUTO(S)\n";
}
else if ($HI == $HF && $MI > $MF){
    echo "O JOGO DUROU 0 HORA(S) E " . (60 - ($MI - $MF)) . " MINUTO(S)\n";
}
else if ($HI == $HF && $MI < $MF){
    echo "O JOGO DUROU 0 HORA(S) E " . ($MF - $MI) . " MINUTO(S)\n";
}
else{
    echo "O JOGO DUROU 24 HORA(S) E 0 MINUTO(S)\n";
}
?>