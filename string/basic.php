<?php
$name="rakib";
echo $name;
echo PHP_EOL;
echo "my name is $name";
echo PHP_EOL;
$heredoc= <<<EOD
hey
 my name is {$name} \n
 where are you from?
EOD;
echo $heredoc;
?>
