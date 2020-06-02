<?php
$student=[
    'fname'=>"shakil",
    'lname'=>"ahmed",
    'class'=>8,
    'section' => 'A',
    'year' =>"2020"
];


print_r($student);

echo "my name is ".$student['fname']." ".$student['lname']."\n";
printf("my name is %s %s",$student['fname'],$student['lname']);
echo PHP_EOL;
// $serialize=serialize($student);
// echo $serialize;

// $unserialize=unserialize($serialize);
// print_r($unserialize);

$jsonData=json_encode($student);
echo $jsonData;
echo PHP_EOL;
$jsonToarray=json_decode($jsonData,true);
print_r($jsonToarray);
