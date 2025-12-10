<?php
$numbers = [5, 6, 3, 8, 2, 1, 10, 32, 43];

$evenNumber = [];
$oddNumber = [];
/*
foreach($numbers as $number){
    if($number % 2 == 0){
        $evenNumber[] = $number;
    }
}
print_r($evenNumber);

*/

foreach($numbers as $number){
    if($number % 2 == 0 && $number != 0){
        $evenNumber[] = $number;
    } else{
        $oddNumber[] = $number;
    }
}
// print_r($evenNumber);
// print_r($oddNumber);


// advance using callback function
$evenNumber = array_filter($numbers, function ($number){
    return $number % 2 == 0;
});
print_r($evenNumber);