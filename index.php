<?php
class ForStringClass
{
    public $longString;
    public $lengthString;
    public $subString;
    public $positionSubString;

    public function __construct(string $longString){
    
        $this->longString = $longString;
        $this->lengthString = $this->getStrLen();
        $this->subString = $this->getSubStr(5, 25);
       // $this->getSubStr(5, 25);
       // $this->positionSubString = $positionSubString;
        
    }
    public function getStrLen($whichString = false)
    {
    	if ($whichString === false) {
            $whichString = $this->longString; 
        }

        return strlen($whichString);
    }
   
    //substr — Возвращает подстроку строки string, начинающейся с start символа по счету и длиной length символов.
    public function getSubStr($start, $len = false, $string = false)
    {
        if (($len === false) && ($string != false)) {
            $len = $this->getStrLen($string);
        }

        if ($string === false) {
            $string = $this->longString;
            $len = $this->lengthString - $start;
        } 

        $subString = false;
        $strToArray = str_split($string);
        
      
        for ($i = $start; $i < $len+$start; $i++) {
               // $subString[] = $strToArray[$i];
               $subString .= $strToArray[$i];
                        }
     
     //   $subString = implode('', $subString);
        return $subString;
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
    public function getStrPos($string, $sub)
    {
    	$start = 0;
        $lenSub = $this->getStrLen($sub); 
        $lenString = $this->getStrLen($string); 

$strToArray = str_split($string);
$subToArray = str_split($sub);

$next = true;

for ($pos = 0; $pos < $lenSub; $pos++) {
    for ($j =  $start; $j < $lenString; $j++) {

        if ($subToArray[$pos] != $strToArray[$j]) {

        	if ($pos > 0) {
        	    $pos = 0;
        	    $next = false;
        	    $start = ++$j;
                break;
            }

        	continue;

        } else {
        	 $next = true;
        	 $start = ++$j;
             break;
        }

    }
}

 if (($pos == $lenSub) && ($next === true)) {
';khv ' 	$this->positionSubString = $start - $lenSub;

    } else {
      $this->positionSubString = false;
    }
    
   return $this->positionSubString;     
        
    }
    #3 substr_count — Возвращает число вхождений подстроки
    public function subStrCount($sub)
    {
        
        $substr_count = 0; 
        $string = $this->longString; // это - чтоб сохранить значение $this->longString, вдруг пригодится дальше
        
        while ($x = $this->getStrPos($string, $sub)) {
            $substr_count++;
                    $string = $this->getSubStr(++$x, false, $string);
        }
        return $substr_count;
    }
}

$myString = new ForStringClass('PHP 5 is very very flexible in accessing member variables and member functions.');
$myString->subString;
//var_dump($myString->explodeStr(' '));
$string = 'PHP 5 is very very flexible in accessing member variables and member functions.';
var_dump($myString->getStrPos($string, 'very'));
var_dump($myString->subStrCount('very'));
