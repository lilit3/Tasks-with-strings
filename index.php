<?php

class ForStringClass
{

	public $longString;
	public $lenght;
	public $shotString;
	public $lenghtShot;
	public $posIn = 2;
	public $strToArray;


   public function __construct(string $longString){

	$this->longString = $longString;
        $this->getStrLen();
        $this->substr = $substr;
        $this->lenghtShot = strlen($this->substr);
        $this->$strToArray = getStrToArr();

    }

    public function getStrLen()
    {
        $this->lenght = strlen($this->lenght);
    }

    public function getStrToArr()
    {
        $this->strToArray = str_split($this->longString);
    }
    
    //strpos
    public function getStrPos()
    {

        for ($i = 0; $i < $this->lenght; $i++) {
        	if (substr_compare($this->longString, $this->shotString, $i, $this->lenghtShot) == 0) {
        		
        		return $i;
            }       
        }
        
    }

    //substr — Возвращает подстроку string substr ( string $string , int $start [, int $length ] )
    //Возвращает подстроку строки string, начинающейся с start символа по счету и длиной length символов.

    public function getSubStr()
    {

        for ($i = 0; $i < $lenLong; $i++) {
        	if (($i < $this->posIn) || ($i >= $this->lenght)) {
        		unset($this->strToArray[$i]);
            }
        }

        return $comma_separated = implode('', $this->strToArray);

    }

    #explode — Разбивает строку с помощью разделителя
    #array explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] )
    #Возвращает массив строк, полученных разбиением строки string с использованием delimiter в качестве разделителя.

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

    #3 substr_count — Возвращает число вхождений подстроки
    public function substrCount($delimiter)
    {

        while ($x = strpos($this->longString,, 's')) {
        	// $x++;
        	$long = substr($long, ++$x);
        	$substr_count++;

        }

        return $substr_count;
    }

}



