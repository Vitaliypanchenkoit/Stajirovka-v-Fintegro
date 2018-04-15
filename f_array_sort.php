<?php

//Method 1 - Use build-in php function
$arr = [11, 24, 7, 89, 5];
$sort = sort($arr);
var_dump($arr);

//Method 2 (Pyzirkoviy)
function array_sort($array){
    $n = count($array) - 1;
    for ($index = 0; $index < $n; $index += 1){
        $chek = FALSE;
        for ($i = 0; $i < $n; $i += 1){
            if ($array[$i] > $array[$i + 1]){
                $x = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $x;
                $chek = TRUE;
            }
        }
        if (!$chek){
            break;
        }
    }
    var_dump($array);
}
array_sort([11, 24, 7, 89, 5]);