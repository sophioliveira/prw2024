<?php
list($n1, $n2, $n3) = explode (" ", readline());
$n = array ($n1, $n2, $n3);
rsort ($n);
$n = array_reverse($n);
foreach($n as $num){
echo "$num\n";

}
echo "\n";
echo "$n1\n"."$n2\n"."$n3\n";
?>