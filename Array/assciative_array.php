<?php
$foods=[
    "vegetables"=>"brinjal, broccoli , carrot, capsicam ",
    "food"      =>"orange, banana,apple ",
    "drink"     =>"water, milk"
];

echo "array delemeter";

$vegetables=explode(', ','brinjal, broccoli , carrot, capsicam,potato, sweet-potao ');


var_dump(count($vegetables));

$vegetablesString=join(', ',$vegetables);
echo $vegetablesString;

echo $foods["vegetables"];
// $foods["drink"]=$foods["drink"].",watermalon";
$foods["drink"] .= ",watermalon";


// foreach($foods as $key=>$value){
//     echo $key."=>".$value;
//     echo PHP_EOL;
// }

// $keys= array_keys($foods);
//  print_r($keys);

// for($i=0;$i<count($keys);$i++){
//     echo $foods[$keys[$i]];
//     echo PHP_EOL;
// }


$values= array_values($foods);
 print_r($values);

for($i=0;$i<count($values);$i++){
    echo $values[$i];
    echo PHP_EOL;
}



$vegetables=preg_split('/(, |,)/ ','brinjal, broccoli , carrot, capsicam,potato, sweet-potao ');
print_r($vegetables);

var_dump(count($vegetables));