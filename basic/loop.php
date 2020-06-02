<?php

//For Loop
for ($i=1;$i<10;$i++){
    // echo $i;
     echo PHP_EOL;
    for ($j=0;$j<$i;$j++){
        echo "*";
    }
}
echo PHP_EOL;

//While Loop
$i=0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
}
//DO While Loop
echo PHP_EOL;
$i=0;
do{
    $i++;
    echo $i.PHP_EOL;
}while($i<10);

echo PHP_EOL;
//GoTO Loop

$i=10;
a: $i++;
echo $i.PHP_EOL;
if($i<20) goto a;



echo PHP_EOL;
//multiple stepping
for($i=10,$j=1;$i>0;$i--,$j++){
    echo $i.":".$j;
    echo ":".(11-$i);
    echo PHP_EOL;
}

//factorial using For Loop


$n=6;
for($i=$n,$factorial=1;$i>1;$i--){
    // $factorial=$factorial*$i;
    $factorial *= $i;
}
printf("the factorial of number %d is :%d",$n,$factorial);


echo PHP_EOL;
//factorial smart way
$operation=0;
$result=1;
for($n=1;$n<=20;$n++){
    $result=$result*$n;
    echo "the factorial of Number {$n} is {$result}";
    $operation++;
    echo PHP_EOL;

}
printf("total Number of operation is : %d",$operation);


echo PHP_EOL;

//multiple stepping

for($i=0,$j=0;$i<100;$i+=7,$j+=11){
    echo $i."\n";
    echo $j<100 ? $j."\n":"";
}

