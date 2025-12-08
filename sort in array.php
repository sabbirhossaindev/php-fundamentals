<?php
$moreNumbers = [5, 6, 3, 8, 2, 1, 0];
$famolyMesbersName = ['sabbir', 'nadim', 'azmin', 'nehon', 'abdullah'];

// key value = associative array
$coustries = [
    'bangladesh' => 'dhaka',
    'india' => 'noyadilli',
    'Srilanka' => 'kolombo'
];

sort($moreNumbers); // all value show capitalize soto tale boro show kore.
print_r($moreNumbers);
rsort($moreNumbers); // reverse er just ulta hobe
print_r($moreNumbers); 
sort($coustries); // a - z ai vabe show hobe.
print_r($coustries);

// apply asort() assiocitive array
// arsort() reverse er jonno assiocitive array

asort($coustries);
print_r($coustries);

// apply ksort() assiocitive array
// krsort() reverse er jonno assiocitive array
ksort($coustries);
print_r($coustries);