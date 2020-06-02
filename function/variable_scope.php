<?php
// $name="Earth";   //global Scope
// function doSomething(){ 
//     global $name;
//     echo $GLOBALS['name'];
//     echo "\n";

//     echo $name;
// }

// doSomething();



// function doSomething(){ 
//     global $name;  //local Scope
//     $name="Earth";
// }

// doSomething();
// echo $name;



function doSomething(){
    static $i; //static scope
    $i=$i ?? 0;
    $i++;
    echo $i."\n";
}
function doExtra(){
    static $i; //static scope
    $i=$i ?? 0;
    $i++;
    echo $i."\n";
}

doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doSomething();
doExtra();


