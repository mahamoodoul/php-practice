<?php


function isEven(int $n){ //parameter
    if($n%2==0){
        return true;
    }
    // else{
    //     return false;
    // }
    return false;
}

function factorial( int $num){
    $result=1;
    for($i=$num;$i>1;$i--){
        $result *= $i;
    }
    return $result;
}



//funcion default value and optional parameter

function serve($foodTypes="coffe",$items="2"){
    echo"{$items} of {$foodTypes} has/have been served";
}