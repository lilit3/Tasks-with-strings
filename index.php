<?php

class ForStringClass
{

    public $longString;
    public $lengthString;

    //public $shotString;
    //public $lenghtShot;

    public function __construct(string $longString){
	
	$this->longString = $longString;
        $this->getStrLen();
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
        	if (($i < $start) || ($i >= $len)) {
        		unset($strToArray[$i]);
            }
        }

        return implode('', $strToArray);
    }

    #explode — Разбивает строку с помощью разделителя. Возвращает массив строк, полученных разбиением строки string с использованием delimiter в качестве разделителя.
    public function explodeStr($delimiter)
    {

        $newArr = [];

        while ($j = strpos($this->longString, $delimiter)) {
        	$newArr[] = substr($this->longString, 0, $j); 
        	$this->longString = substr($this->longString, $j+1);
        }

        $newArr[] = substr($this->longString, 0); 
       
        return($newArr);
    }

     //strpos
    public function getStrPos()
    {

        // for ($i = 0; $i < $this->lengthString; $i++) {
        // 	if (substr_compare($this->longString, $this->shotString, $i, $this->lenghtShot) == 0) {
        		
        // 		return $i;
        //     }       
        // }
        
    }

    #3 substr_count — Возвращает число вхождений подстроки
    public function substrCount($delimiter)
    {

        // while ($x = strpos($this->longString,, 's')) {
        // 	$long = substr($long, ++$x);
        // 	$substr_count++;

        // }

        // return $substr_count;
    }

}


$myString = new ForStringClass('PHP 5 is very very flexible in accessing member variables and member functions.');
echo $myString->getSubStr(5, 25);
