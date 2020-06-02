<?php
$person=array('fname'=>'shakil','lname'=>'ahmed');
$newPErson=&$person;

$newPErson['lname']='rana';

print_r($person);
print_r($newPErson);


function printData(&$person){
    $person['lname'] .=' changed';
    print_r($person);
}

printData($person);
print_r($person);

unset($person['lname']);
print_r($person);