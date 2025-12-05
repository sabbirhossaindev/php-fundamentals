<?php
$age  = 21;

switch (true){
    case($age <= 13);
    echo "Child";
    break;
    case ($age >= 14 && $age <= 20);
    echo "Teenager";
    break;
    case ($age >= 20 && $age < 60);
    echo "Adult";
    break;
    default:
    echo "Senior";
}