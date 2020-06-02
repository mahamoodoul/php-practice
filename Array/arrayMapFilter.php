<?php
$numbers=array(1,2,3,4,5,6,7,8,9,10,11);

function squre($n){
    printf("Squre of %d id %d \n",$n,$n*$n);
}
array_walk($numbers,'squre'); //squre is callback function




//Array map
function cube($n){
    return $n*$n*$n;
}

$newNumbers=array_map('cube',$numbers); //cube is callback function
print_r($newNumbers);
print_r($numbers);


function even($num){
    return $num%2==0;
}

function odd($num){
    return $num%2==1;
}


$evenNumbers=array_filter($numbers,'even');
print_r($evenNumbers);
$oddNumbers=array_filter($numbers,'odd');
print_r($oddNumbers);



$person=array('a'=>'sujon','b'=>'saleh','c'=>'karim','d'=>'srizon','e'=>'shipto');


function nameFilter($name){
    return $name[0]='s';
}

$nameofsNAme=array_filter($person,'nameFilter');
print_r($nameofsNAme);