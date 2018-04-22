<?php

$exercise1 = "play football";
$exercise2 = "play basketball";
$exercise3 = "play baseball";
$exercise4 = "play pingpang";
$exercise5 = "play tennis";
$exercise6 = "play golf";
$exercise7 = "play volleyball";

$day = date('N');

if($day == 1){
    echo $exercise1;
}
else if($day == 2){
    echo $exercise2;
}
else if($day == 3){
    echo $exercise3;
}
else if($day == 4){
    echo $exercise4;
}
else if($day == 5){
    echo $exercise5;
}
else if($day == 6){
    echo $exercise6;
}
else{
    echo $exercise7;
}


?>