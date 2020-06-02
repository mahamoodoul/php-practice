<?php
$n=12;
if($n%2==0){
    echo " $n this is even number";
}
else{
    echo " $n this odd number";
}
echo "\n";
$year=2020;
if($year % 4==0 && ($year %100!=0 || $year %400==0)){
    echo "{$year} is a leap year";
}
else 
    echo "{$year} is not a leap year";