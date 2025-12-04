<?php
$x = 15;
$y = 17;

if($x > $y){
    echo "$x is greater then $y";
} else if($x < $y){
    echo "$x is smaller then $y";
} else{
    echo "$x is same as $y";
}

echo PHP_EOL;

$person1 = "Sabbir Hossain";
$person2 = "Sabbir";

if($person1 != $person2){
    echo "They are not same person";
} else{
    echo "They are same person";
}