<?php
//Функция возвращает количество каждого символа в строке
//Method 1
function count_letters ($string){
    $array_of_letters = str_split($string);
    $array = [];
    $arr = [];
    foreach ($array_of_letters as $letter){
        $n = 0;
        foreach ($array_of_letters as $l){
            if ($l == $letter){
                $n ++;
            }
        }
        $arr = [$letter => $n];
        if (!array_key_exists($letter, $array)){
            $array = array_merge($array + $arr);
        }
    }
    var_dump($array);
}
count_letters('nfnfnfwnf');

//Method 2 - Optimal
function count_letters_2($string){
    $array = [];
	$c = strlen($string);
    for ($i = 0; $i < $c; $i++){
        $letter = $string[$i];
        if (array_key_exists($letter, $array)){
            $array[$letter]++;
		}else{
			$array[$letter] = 1;
        }
    }
	print_r($array);
}
count_letters_2('nfnfnfwnf');