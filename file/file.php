<?php
$filename="D:\\PHP7\\file\\file.txt";

$fp=fopen($filename,'r');
while($line= fgets($fp)){
    echo $line;
}
rewind($fp);
$fp=fopen($filename,'r');
while($line= fgets($fp)){
    echo $line;
}
fclose($fp);




