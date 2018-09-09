<?php

#strpos
$long = 'long string';
$shot = 'str';

$start = 2;

$lenLong = strlen($long);
$lenShot = strlen($shot);

for ($i = 0; $i < $lenLong; $i++) {
    if (substr_compare($long, $shot, $i, $lenShot) == 0) {
        echo $i;
    }
}

#substr — Возвращает подстроку string substr ( string $string , int $start [, int $length ] )
#Возвращает подстроку строки string, начинающейся с start символа по счету и длиной length символов.

$array = str_split($long);

for ($i = 0; $i < $lenLong; $i++) {
    if (($i < $start) || ($i >= $lenLong)) {
        unset($array[$i]);
    }
}
echo $comma_separated = implode('', $array);
