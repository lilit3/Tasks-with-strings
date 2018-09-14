<?php
class ForStringClass
{
    public $longString;
    public $lengthString;
    public $subString;
    public function __construct(string $longString){
    
        $this->longString = $longString;
        $this->getStrLen();
        $this->getSubStr(5, 25);
        
    }
    public function getStrLen()
    {
        $this->lengthString = strlen($this->longString);
    }
   
    //substr — Возвращает подстроку строки string, начинающейся с start символа по счету и длиной length символов.
    public function getSubStr($start, $len = false)
    {
        if ($len === false) {
            $len = $this->lengthString;
        }

        $strToArray = str_split($this->longString);
       
        for ($i = 0; $i < $this->lengthString; $i++) {
            if (($i >= $start) && ($i < ($len + $start))) {
                $this->subString[] = $strToArray[$i];
            }
        }
        
        $this->subString = implode('', $this->subString);
        return $this->subString;
    }
    //explode — Разбивает строку с помощью разделителя. Возвращает массив строк, полученных разбиением строки string с использованием delimiter в качестве разделителя.
    public function explodeStr($delimiter)
    {
        $newArr = [];
        $temp = $this->longString;
        while ($j = strpos($this->longString, $delimiter)) {
            $newArr[] = substr($this->longString, 0, $j); 
            $this->longString = substr($this->longString, $j+1);
        }
        $newArr[] = substr($this->longString, 0); 
        $this->longString = $temp;
       
        return($newArr);
    }
   // strpos просто сравнивать по символьно. искать первый симфол и если нашелся то и остальные проверять. если остальных нет то снова искать первый
    public function getStrPos($sub)
    {
        for ($i = 0; $i < $this->lengthString; $i++) {
            if (substr_compare($this->longString, $sub, $i, strlen($sub)) == 0) {
                
            return $i;
            }       
        }
        return;  

      $start = 0;
// $string = 'PHP 5 is very very flexible';
// $sub = 'exib';
// $lenStr = strlen($string);
// $lenSub = strlen($sub);
// $pos = 0;
// $strToArray = str_split($string);
// $subToArray = str_split($sub);

// $q = true;

// for ($pos = 0; $pos < $lenSub; $pos++) {

//     for ($j =  $start; $j < $lenStr; $j++) {
//         //echo $j , $subToArray[$pos] , $strToArray[$j] , "\n";

//         if ($subToArray[$pos] == $strToArray[$j]) {
//             $start = ++$j;
//             $q = true;
//             break;
//         } else {
//             if ($pos > 0) {
//                 $pos = 0;
//                 $start = ++$j;
//                 $q = false;
//                 break 1;
                
//             }
//         }
//     }
// }
// echo $pos;
//  if (($pos == $lenSub)&& ($q === true)) {
//         echo ($start - $lenSub);
//     } else {
//       echo 'Not found'; 
//     }
    
//     echo ' = ' , strpos($string, $sub);
        
        
    }
    #3 substr_count — Возвращает число вхождений подстроки
    public function substrCount($sub)
    {
        $substr_count = $this->lengthString - $this->lengthString; // это 0. Это нормально вообще?
        $string = $this->longString; // это - чтоб сохранить значение $this->longString, вдруг пригодится дальше
         while ($x = strpos($string, $sub)) {
             $string = substr($string, ++$x);
             $substr_count++;
        }
        return $substr_count;
    }
}
$myString = new ForStringClass('PHP 5 is very very flexible in accessing member variables and member functions.');
echo $myString->subString;
//var_dump($myString->explodeStr(' '));
//var_dump($myString->getStrPos('flexible'));
//var_dump($myString->substrCount('very'));
