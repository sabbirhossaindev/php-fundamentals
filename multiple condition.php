<?php
$age = 12;

if($age <= 13){
    echo "You are a Child";
} else if ($age >= 13 && $age <= 20){
    echo "You are a Teenager";
} else if ($age >= 20 && $age < 60){
    echo "You are a Adult";
} else{
    echo "You are a Senior";
}

echo PHP_EOL;

$role = "editor";

if($role == "editor" || $role == "admin"){
    echo "You can join the meeting";
} else{
    echo "Access denied";
}