<?php
$moreNumbers = [5, 6, 3, 8, 2, 1, 0];
$famolyMesbersName = ['sabbir', 'nadim', 'azmin', 'nehon', 'abdullah'];

// key value = associative array
$coustries = [
    'bangladesh' => 'dhaka',
    'india' => 'noyadilli',
    'Srilanka' => 'kolombo'
];

// DISPLAY ALL VALUE USING foreach()
foreach($moreNumbers as $number){
    echo $number;
    echo PHP_EOL;
}

// DISPLAY ALL VALUE USING foreach()
foreach($famolyMesbersName as $name){
    echo $name;
    echo PHP_EOL;
}

// FRO ASSASOTIVE ARRAY DISPLAY ALL VALUE USING foreach( KEY =>)
foreach($coustries as $key => $country){
    echo $key = $country;
    echo PHP_EOL;
}

$leangth  = count($moreNumbers);
// echo $leangth;
for($i = 0; $i < $leangth; $i++){
    echo $moreNumbers[$i];
    echo PHP_EOL;
}