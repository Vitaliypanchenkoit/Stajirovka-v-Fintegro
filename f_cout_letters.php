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

//Method 1.1 Use function "array_count_values"
function count_letters_1 ($string){
    $array_of_letters = str_split($string);
    $array_of_letters = array_count_values($array_of_letters);
	arsort($array_of_letters);

	print_r($array_of_letters);
}
count_letters_1('nfnfnfffwnf');

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

//Method 2.2 Use function count_chars
function count_letters_3($string){
    $sorted_string = count_chars($string, 1);
    $array = [];
	foreach ($sorted_string as $letter => $val){
        $letter = chr($letter);
        $array[$letter] = $val;

		//echo chr($letter) . "=".  $val . ";" . "\n";
    }
    var_dump($array);
}
count_letters_3('nfnfnfwnf');