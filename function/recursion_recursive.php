<?php
function printNumber($start,$end,$increment=2){
    if($start>$end){
        return ;
    }
    echo $start."\n";
    $start+=$increment;
    printNumber($start,$end,$increment);
}

printNumber(10,30,3);


function factorial($n){
    if($n<=1){
        return 1;
    }
    return $n * factorial($n-1);
}

echo factorial(5);