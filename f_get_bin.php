<?php

//Функция преобразовывает число из десятичного в двоичный формат
function get_bin($dec){
    $bin = '';
    while ($dec > 0){
        $var = $dec & 1;
        $bin .= $var;
        $dec = $dec >>1;
    }
    echo strrev($bin);
}

get_bin(13);
