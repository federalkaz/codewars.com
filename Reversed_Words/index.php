<?php

function reverseWords($str) {
    // разбить строку на массив
    $words = explode(' ', $str);
    // перевернуть элементы массива
    krsort($words);
    // преобразовать массив в строку
    return implode(" ", $words);
}

echo reverseWords('Hello world!');