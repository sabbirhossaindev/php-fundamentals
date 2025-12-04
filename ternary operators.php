<?php
$number = 18;
$remainder = $number % 2;

// if($remainder == 1){
//     echo "$number is Odd number";
// } else{
//     echo "$number is even number";
// }

$result = $remainder == 0 ? "Even" : "Odd";
echo $result;

echo PHP_EOL;

$age = 13;
// if($age <= 13){
//     echo "You are a Child";
// } else if ($age >= 13 && $age <= 20){
//     echo "You are a Teenager";
// } else if ($age >= 20 && $age < 60){
//     echo "You are a Adult";
// } else{
//     echo "You are a Senior";
// }

$ageGroup = $age <= 13 ? "Child" : (($age >= 13 && $age <= 20) ? "Teenager" : (($age >= 20 && $age < 60) ? "Adult" : "Senior"));
echo $ageGroup;