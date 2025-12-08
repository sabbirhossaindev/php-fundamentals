<?php
$moreNumbers = [5, 6, 3, 8, 2, 1, 0];
$famolyMesbersName = ['sabbir', 'nadim', 'azmin', 'nehon', 'abdullah'];

// key value = associative array
$coustries = [
    'bangladesh' => 'dhaka',
    'india' => 'noyadilli',
    'Srilanka' => 'kolombo'
];

// echo $coustries ['Srilanka'];
// echo PHP_EOL;
// $coustries['Srilanka'] = 'colombo'; // reples value
// echo $coustries['Srilanka'];
// echo PHP_EOL;

// echo $famolyMesbersName[1];
// echo PHP_EOL;
// echo$moreNumbers[1]; // check position

echo count($coustries); // count (PHP 8.4) conting ayyay data 
$moreNumbers[] = 60; // add new more number
print_r($moreNumbers); // showing output print_r
// ADD ASSIOTIVE ARRAY NEW VALUE
$coustries['nepel'] = "Katmundu"; // FRIST ADD KEY = VALUE
print_r($coustries); // ALL ARRAY SHOW DISPLAY
print_r($coustries['nepel']); // JUST DESPLAY SHOW OUTPUT

// array_push($moreNumbers, 23); // ADD NEW MORE NUMBERS USING ARRAY_PUSH()
// $lastElement = array_pop($moreNumbers); // 
// echo $lastElement;
// print_r($moreNumbers);

array_unshift($moreNumbers, 99); // ADD FIRST VALUE USING ARRAY_UNSHIFT()
array_shift($moreNumbers); // REMOVE FIRST VALUE USING ARRAY_SHIFT()
print_r($moreNumbers);