<?php
$string="hello,mr how are you shakil";
$parts=explode(" ",$string);
print_r($parts);
echo PHP_EOL;
$join=implode(" ",$parts);
echo $join;
echo PHP_EOL;


$parts3=strtok($string," ,");
while($parts3 !==false){
    echo $parts3."\n";
    $parts3=strtok(" ,");
}
//
$parts4=str_split($string);
print_r($parts4);
//regular expression
echo PHP_EOL;
$parts5=preg_split("/ |,/",$string);
print_r($parts5);
