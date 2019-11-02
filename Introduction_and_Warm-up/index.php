<?php


function maxProduct($arr, $size) : int {
    // Сортируем массив по убыванию (от большего числа к меньшему)
    arsort($arr, SORT_NUMERIC);
    /*
    // Добавляем переменную в которую запишем результат и приравниваем к 1 (0 будет обнулять всё)
    $res = 1;
    // Добавляем переменную-счётчик
    $count = 0;
    // Берём первое максимальное число
    foreach ($arr as $value) {
        // и начинамем отслеживать кол-во взятых чисел
        if ($count < $size) {
            // считаем произведение
            $res *= $value;
            // увеличиваем счётчик
            $count++;
        } else {
            // как только достигнем кол-во необходимых максимальных чисел, то возвращаем результат
            return $res;
        }
    }
    */
    return array_product(array_slice($arr, 0, $size));
}

$arr = [10, 3, -27, -1];
echo maxProduct($arr, 3);