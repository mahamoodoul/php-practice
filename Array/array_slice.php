<?php
$fruits=array('apple','banana','orange','plum','dates','mango'); 
// $someFruits=array_slice($fruits,2,1);

// $someFruits=array_slice($fruits,3,4,true);
// print_r($someFruits);

 $random=array('a'=>10,'b'=>20,'c'=>30,'d'=>40,12=>75,'e'=>50);

// $someRandom=array_slice($random,2,-1,true);
// print_r($someRandom);

$newFruits=array('jackfruits','tamarinf','pineapple','grapse');

$someFruits=array_splice($fruits,1,-1,$newFruits);
print_r($someFruits);
print_r($fruits);


