<?php

function negationValue($str, $val) {
    if ((iconv_strlen($str) % 2 == 0)) {
        // истина
        return (boolean) $val;
    } else {
        // отрицание
        return  (boolean) !$val;
    }
}

var_dump(negationValue('!!!', true));