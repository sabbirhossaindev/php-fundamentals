<?php
$moreNumbers = [5, 6, 3, 8, 2, 1, 0];
$famolyMesbersName = ['sabbir', 'nadim', 'azmin', 'nehon', 'abdullah'];

// key value = associative array
$coustries = [
    'bangladesh' => 'dhaka',
    'india' => 'noyadilli',
    'Srilanka' => 'kolombo'
];

echo $coustries ['Srilanka'];
echo PHP_EOL;
$coustries['Srilanka'] = 'colombo'; // reples value
echo $coustries['Srilanka'];
echo PHP_EOL;

echo $famolyMesbersName[1];
echo PHP_EOL;
echo$moreNumbers[1]; // check position