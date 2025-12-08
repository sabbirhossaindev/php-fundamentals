<?php
$moreNumbers = [5, 6, 3, 8, 2, 1, 0];
$famolyMesbersName = ['sabbir', 'nadim', 'azmin', 'nehon', 'abdullah'];

// key value = associative array
$coustries = [
    'bangladesh' => 'dhaka',
    'india' => 'noyadilli',
    'Srilanka' => 'kolombo'
];

// FIND ARRAY array_search(kotoNumber, karModda)
if($position = array_search(3, $moreNumbers)){
    echo "3 is found $position Number position";
}

// FIND ARRAY in_array(kotoNumber, karModda)
if($position = in_array("dhaka", $coustries)){
    echo "\nBangladesh is found $position Number position";
}

//array_key_exists() APPLING ASSIOSIATIVE ARRAY
if(array_key_exists("bangladesh", $coustries)){
    echo "\nCountries Found";
}