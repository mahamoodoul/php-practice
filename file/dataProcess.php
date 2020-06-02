<?php
$filename="D:\\PHP7\\file\\t3.txt";

$student=array(
    array(
        'fname'=>"shakil",
        'lname' =>"ahmed",
        'age'=>21,
        'class' =>7,
        'roll' =>10
    ),
    array(
        'fname'=>"rasel",
        'lname' =>"rana",
        'age'=>22,
        'class' =>7,
        'roll' =>1
    ),
    array(
        'fname'=>"dipu",
        'lname' =>"karim",
        'age'=>23,
        'class' =>7,
        'roll' =>5
    )
);

// $fp=fopen($filename,'w');
// foreach($student as $st){
//     $data=sprintf("%s ,%s,%s ,%s,%s \n",$st['fname'],$st['lname'],$st['age'],$st['class'],$st['roll']);
//     fwrite($fp,$data);
// }
// fclose($fp);



//csv format
// $fp=fopen($filename,'w');
// foreach($student as $st){
//   fputcsv($fp,$st);
// }
// fclose($fp);




// $fp=fopen($filename,'r');
// while($data=fgets($fp)){
//     $student=explode(",",$data);
//     printf("Name:%s %s\nAge: %s\nClass:%s\nRoll:%s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
// }
// fclose($fp);


//csv format read


// $fp=fopen($filename,'r');
// while($data=fgetcsv($fp)){
//     printf("Name:%s %s\nAge: %s\nClass:%s\nRoll:%s\n\n", $data[0], $data[1], $data[2], $data[3], $data[4]);
// }
// fclose($fp);

$data=file($filename);
unset($data[1]);
print_r($data);

$fp=fopen($filename,"w");
foreach($data as $line){
    fwrite($fp,$line);
}
fclose($fp);