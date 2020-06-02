<?php
$numbers=array(1,2,3,4,5,6,7,8,9,10,11);


function sum($oldValue,$newVvalue){
    if ($newVvalue%2==1){
    return $oldValue+$newVvalue;
    }
    else{
        return $oldValue;
    }
}

$sum=array_reduce($numbers,'sum',0);
echo($sum);

//list
echo PHP_EOL;
$colors=array('black','white','blue','green');
list($a,$b,$c,$d)=$colors;
echo $a;



//range function


$value=range(11,20,2);
print_r($value);

foreach(range(0,60,6) as $num){
    if ($num>0){
        echo $num."\n";
    }
}



//random number


$numbers=range(40,72);
$random=mt_rand(0,32);
$luck=$numbers[$random];
if($luck%2==0){
    echo "Head";
}else{
    echo "Tail";
}
echo PHP_EOL;
shuffle($numbers);
print_r($numbers);
$randNumber=$numbers[10];
echo PHP_EOL;
echo $randNumber;
$rand=mt_rand(1,6);
echo($rand);
