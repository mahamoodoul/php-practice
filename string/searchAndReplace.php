<?php
$string="Quick brown Brown fox Fox jumps over the lazy Lazy dogs";

$replace=str_ireplace(array("brown","fox","Lazy"),array("red","elephent","cleaver"),$string,$count);

echo $replace."\n";
echo $count;