<?php
$age  = 21;

switch (true){
    case($age <= 13);
    echo "Child";
    break;
    case ($age >= 14 && $age <= 20);
    echo "Teenager";
    break;
    case ($age >= 21 && $age < 60);
    echo "Adult";
    break;
    default:
    echo "Senior";
}

echo PHP_EOL;

// using match expression (PHP 8.0+);
echo match(true) {
    $age <= 13 => "child",
    $age >= 14 && $age <= 20 => "Teenager",
    $age >= 21 && $age <= 60 => "Adult",
    default => "Senior",
};