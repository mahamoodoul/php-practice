<?php
$string="Quick brown fox jumps over the lazy dogs";
echo strpos($string,'o'); //case sensitive
$ofset= stripos($string,'q'); //not case senssitive

if($ofset!==false){
    echo "\n word is found";
}
echo strripos($string,'Q'); // 0 and false are equal in php. 