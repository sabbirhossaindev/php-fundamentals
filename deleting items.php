<?php
$moreNumbers = [5, 6, 3, 8, 2, 1, 0];
$famolyMesbersName = ['sabbir', 'nadim', 'azmin', 'nehon', 'abdullah'];

// key value = associative array
$coustries = [
    'bangladesh' => 'dhaka',
    'india' => 'noyadilli',
    'Srilanka' => 'kolombo'
];

unset($moreNumbers[2]); //  when i use unset() remove arrary index with remove value
unset($coustries['india']);
print_r($coustries); // remove assosicotive array
print_r($moreNumbers);

array_splice($moreNumbers, 2, 1); // koro number delete korbo, koyta detete korbo
print_r($moreNumbers);