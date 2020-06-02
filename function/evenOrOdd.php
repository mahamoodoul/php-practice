<?php

// function isEven($n){ //parameter
//     if($n%2==0){
//         return true;
//     }
//     // else{
//     //     return false;
//     // }
//     return false;
// }
include_once "functions.php";
$x=5;
if(isEven($x)){  //argument
    echo "{$x} number is even";
}
else{
    echo "{$x} number is odd";
}




echo PHP_EOL;
//factorial check

echo "the factorial of {$x} is:".factorial($x);



echo PHP_EOL;
$ietm="4";
$food="chicken";
serve($ietm,$food);
//optional value use korle 2tai parameter e use korte hobe. noyto error ashbe.



echo PHP_EOL;
function sum(int $x, int $y, int $z):int{
    // return "abc";
    return $x+$y+$z;
}

echo sum(5,2,3);



echo PHP_EOL;


function sumAll($a,$b,int ...$numbers){
    
    $result=0;
    for($i=0;$i<count($numbers);$i++){
        $result +=$numbers[$i];
    }
    return $result+$a+$b;

}

echo sumAll(1,2,3,4,5,6,7,8,9,4,5);