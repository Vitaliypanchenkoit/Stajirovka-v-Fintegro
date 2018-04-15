<?php
// Функция выполняет поиск элемента в сортированном массиве - возвращает ключ указанного елемента
function search_key(int $i, array $arr){
    $start = 0;
    $end = count($arr) - 1;
    $middle;
    $result = -1;
    while ($start <= $end){
        $middle = ceil(($start + $end)/2);
        if ($i === $arr[$middle]){
            $result = $middle;
            break;
        }elseif($i > $arr[$middle]){
            $start = $middle + 1;
        }else{
            $end = $middle - 1;
        }
    }
    echo $result;
}

search_key(5, [1,2,3,4,5,6]);
