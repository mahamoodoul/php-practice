<?php
$x=7;
$y=8;
$result=$x<=>$y;
if($result==1){
    echo "{$x} is grater than {$y}";
}
else if ($result==0){
    echo "{$x} is equal to {$y}";
}
else if ($result==-1){
    echo "{$x} is smaller to {$y}";
}