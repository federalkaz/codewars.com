<?php

function findDifference($a, $b) {
    //Получаем произведение двух получаемых массивов
    $productFirstArray = array_product($a);
    $productSecondArray = array_product($b);
    //И возвращаем разницу по модулю
    return abs($productFirstArray - $productSecondArray);
}