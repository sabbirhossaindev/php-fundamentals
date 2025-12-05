<?php

for($i = 1; $i <= 10; $i++){
    echo "$i = Hello Sabbir";
    echo PHP_EOL;
}

echo PHP_EOL;

// print even number 2-100
for ($i = 2; $i <= 100; $i += 2){
    $remainder = $i % 2;
    if ($remainder == 0){
        echo "The Even Number is = $i";
        echo PHP_EOL;
    }
}