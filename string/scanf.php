<?php

$name="Mahmud Shakil  01773521823 shakil@gmail.com";
$parts=sscanf($name,"%s %s %11d %s");
print_r($parts);

sscanf($name,"%s %s %11d %s",$fname,$lname,$num,$email);
echo $email;