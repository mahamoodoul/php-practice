<?php
// $name=array(
//     "shakil",
//     "rabbi",
//     "tanjin",
//     "ankhy"

// );
$name=[
    "shakil",
    "rabbi",
    "tanjin",
    "ankhy"

];


$name[2]="tanjinaaa";
$nam=array_pop($name);

$naa=array_shift($name); 



// $totalName=count($name);
// for($i=0;$i<$totalName;$i++){
//     echo $name[$i];
//     echo PHP_EOL;
// }

// for ($i=$totalName-1;$i>=0;$i--){
//     echo $name[$i];
//     echo PHP_EOL;
// }


// echo $nam;
// echo "\n";
// echo $naa;
$name[]="srizon";
array_push($name,"robin");
array_unshift($name,"shupty");
array_unshift($name,"shioly");

$totalName=count($name);
for($i=0;$i<$totalName;$i++){
    echo $name[$i];
    echo PHP_EOL;
}
