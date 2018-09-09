<?php

//strpos
$long = 'long string';
$shot = 'str';

$lenLong = strlen($long);
$lenShot = strlen($shot);

for ($i = 0; $i < $lenLong; $i++) {
    if (substr_compare($long, $shot, $i, $lenShot) == 0) {
        echo $i;
    }
}

echo strpos($long, $shot);

