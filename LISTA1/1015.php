<?php
    list($x1, $y1) = explode (" ", readline());
    list($x2, $y2) = explode (" ", readline());
    $D = sqrt((($x2 - $x1)**2) + (($y2 - $y1)**2));
    $D = number_format($D, 4, ".", "");
    echo "$D\n";
?>