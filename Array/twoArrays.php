<?php
$fruits1=array('a'=>'apple','k'=>'banana','c'=>'orange','d'=>'plum','e'=>'dates','f'=>'mango');
$fruits2=array('f'=>'stowbary','e'=>'dates','f'=>'mango');


$numbers1=array(12,22,33,44,55,66,77,88);
$numbers2=array(12,33,88,00,79,44);


$common=array_intersect($numbers1,$numbers2);
print_r($common);


// $commonF=array_intersect($fruits1,$fruits2);

$commonF=array_intersect_assoc($fruits1,$fruits2);
print_r($commonF);


$diif=array_diff($numbers2,$numbers1);
print_r($diif);


$diffA=array_diff_assoc($fruits1,$fruits2);
print_r($diffA);