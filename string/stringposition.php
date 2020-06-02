<?php
$name="hello world";
echo $name[0];
echo $name[6];
echo PHP_EOL;
echo substr($name,1,5);
echo PHP_EOL;
echo substr($name,-5,-1);

//string reverse
echo PHP_EOL;
echo strrev($name);