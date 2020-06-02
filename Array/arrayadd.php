<?php
$fruits=array('apple','banana','orange','plum','dates','mango');


$newFruits1=array_slice($fruits,0,3);
$newFruits2=array_slice($fruits,3,null,true);

$newFruits=array_merge($newFruits1,$newFruits2);

print_r($newFruits1);
print_r($newFruits2);
print_r($newFruits);

$newFruitsPlus=$newFruits1+$newFruits2;

print_r($newFruitsPlus);






$random=array('a'=>10,'b'=>20,'c'=>30,'d'=>40,12=>75,'e'=>50);
print_r($random);
//$randomData=array_splice($random,2,2,array('j'=>45,'k'=>72));

$r1=array_slice($random,0,2,true);
$r2=array_slice($random,3,null,true);
$r3=array('j'=>45,'k'=>72,'name'=>'shakil');

$randomDataAddCorrectly=$r1+$r2+$r3;

print_r($r1);
print_r($r2);
print_r($r3);
print_r($randomDataAddCorrectly);

// print_r($randomData);
