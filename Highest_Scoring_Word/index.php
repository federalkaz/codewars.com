<?php

function high($str)
{
    $res = [];
    // записываем буквы алфавита в массив и тем самым им назначаются порядковые номера
    $alphabet = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
        'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    ];
    // формируем набор слов из полученной строки
    $words = explode(' ', $str);
    // переводим слова в сумму цифр
    foreach ($words as $word) {
        // начинаем считывать побуквенно каждое слово
        for ($count = 0, $summ = 0; $count <= iconv_strlen($word); $count++) {
            // считаем сумму порядковых номеров
            foreach ($alphabet as $number => $letter) {
                // находим букву в алфавите (массиве)
                if ($word[$count] == $letter) {
                    // и прибавляем к итоговому результату
                    $summ += $number+1;
                }
            }
        }
        // предварительно проверим, нет ли слова с такой же суммой, если есть, то пропускаем запись т.к. в условии
        // необходимо вернуть первое встретившееся
        if (key_exists($summ, $res)) {
            continue;
        }
        // иначе записываем
        $res[$word] = $summ;
    }
    // возвращаем слово с наибольшим кол-вом очков
    arsort($res, 0);
    return array_key_first($res);
}


high('what time are we climbing up the volcano');