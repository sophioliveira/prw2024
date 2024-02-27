<?php
    $TG = intval(readline());
    $VM = intval(readline());
    $LT = ($TG * $VM)/12;
    $LT = number_format($LT, 3, ".", "");
    echo "$LT\n";
?>