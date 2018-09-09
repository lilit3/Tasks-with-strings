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

#substr_count — Возвращает число вхождений подстроки

#explode — Разбивает строку с помощью разделителя
#array explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] )
#Возвращает массив строк, полученных разбиением строки string с использованием delimiter в качестве разделителя.

$delimiter = ',';

$newArr = [];

while ($j = strpos($long, $delimiter)) {
    $newArr[] = substr($long, 0, $j); 
    $long = substr($long, $j+1);
  
}

$newArr[] = substr($long, 0); 
var_dump($newArr);

#3 substr_count — Возвращает число вхождений подстроки
while ($x = strpos($long, 's')) {
   // $x++;
    $long = substr($long, ++$x);
    $substr_count++;
    
  
}
echo $substr_count;
