<?php
$color="yellow";
switch($color){
    // case 'red':
    //     echo "red is favorite color";
    //     break;
    // case 'yellow':
    //     echo "yellow is favorite color";
    //     break;
    case 'red':
    case 'yellow':
        echo ucwords($color)." is favorite color";
        break;
    case 'black':
        echo "balck is favorite color";
        break;
    default:
        echo "color not found";
}