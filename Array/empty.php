<?php
$name="";

if(isset($name)){
    echo "name has";
}else{
    echo "name not";
}

echo "\n";

if(empty($name)){
    echo "name empty";
}else{
    echo "not empty";
}
echo "\n";

if(isset($name) && is_numeric($name) || $name !=""){
    echo "name is set not empty";
}else{
    echo "name not set";
}