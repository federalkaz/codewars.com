<?php

function balancedNum($num) {
    $lengthString = iconv_strlen($num);
    // если длина строки равна 1 или 2 символам то сбалансированная
    if ($lengthString < 3) {
        return 'Balanced';
    } else {
        if ($lengthString % 2 == 0) {
            // с двумя цифрами в середине
            // взять сумму цифр слева и справа
            $left = array_sum(str_split(mb_substr($num, 0, $lengthString / 2 - 1)));
            $right = array_sum(str_split(mb_substr($num, $lengthString / 2 + 1)));
            //echo 'Сумма слева --> ' . $left . PHP_EOL;
            //echo 'Сумма справа --> ' . $right . PHP_EOL;
            // сравнить и вернуть ответ
            if ($left == $right) {
                return 'Balanced';
            } else {
                return 'Not Balanced';
            }
        } else {
            // с одной цифрой в середине
            // взять сумму цифр слева и справа
            $left = array_sum(str_split(mb_substr($num, 0, $lengthString / 2)));
            $right = array_sum(str_split(mb_substr($num, $lengthString / 2 + 1)));
            //echo 'Сумма слева --> ' . $left . PHP_EOL;
            //echo 'Сумма справа --> ' . $right . PHP_EOL;
            // сравнить и вернуть ответ
            if ($left == $right) {
                return 'Balanced';
            } else {
                return 'Not Balanced';
            }
        }
    }
}

balancedNum('');