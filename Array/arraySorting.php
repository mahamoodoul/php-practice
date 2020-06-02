<?php
$fruits=array('a'=>'apple','b'=>'banana','c'=>'orange','d'=>'plum','e'=>'dates','f'=>'mango');
$random=array('a'=>10,'b'=>20,'c'=>30,'d'=>40,12=>75,'e'=>50);

// rsort($fruits);
// print_r($fruits);

arsort($random);
print_r($random);



foreach($random as $rand){
    echo $rand."\n";
}


$goods=array('apple','Apple','mango','Mango','pineapple','Pineapple');

sort($goods,SORT_STRING | SORT_FLAG_CASE);
print_r($goods);




$numbers=array(22,33,22,33,444,555,677,'67','shakil','rasel','dipu');

$ab='shakil';
if(in_array(67,$numbers,true)){
    echo " number found \n";
}else{
    echo "not found";
}

$fruit=array('a'=>'apple','b'=>'banana','c'=>'orange','d'=>'plum','e'=>'dates','f'=>'mango');
$offset=array_search(67,$numbers,true);
echo $offset."\n";


if(key_exists('a',$fruit)){
    echo "key has \n";

}else{
    echo "key not \n";
}
