<?php

function solution($str)
{
    $result = str_split($str, 2);
    if (mb_strlen(end($result)) == 1) {
        $result[count($result) - 1] .= '_';
    }
    return $result;
}

echo var_dump(solution('abcde'));