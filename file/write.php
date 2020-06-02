<?php
$filename="D:\\PHP7\\file\\t2.txt";
$existingData=file_get_contents($filename);
$fp=fopen($filename,'w');
fwrite($fp,$existingData);
fwrite($fp,"total\n");
fclose($fp);
