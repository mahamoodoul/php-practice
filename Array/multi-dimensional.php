<?php
$foods=[
    "vegetables"=>explode(', ','brinjal, broccoli , carrot, capsicam '),
    "food"      =>explode(', ',"orange, banana,apple "),
    "drink"     =>explode(', ',"water, milk")
];
// print_r($foods);


array_push($foods['drink'],"orange jucie");
// print_r($foods);
// echo $foods['vegetables'] [3];


$sample=[
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,4444,[
        66,77,88,[00,000,0000,['shakil','rabbi']]]]
    ];

 print_r($sample);
var_dump ( $sample[3] [4] [3] [3] [0]);