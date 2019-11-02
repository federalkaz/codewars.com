<?php

function oddCount($n) {

    // положительных - $n > 0
    // нечётных - ($count % 2) > 0
    // ниже N - $count < $n
    for ($positiveOddNumbers = [], $count = 0; $count < $n; $count++) {
        if (($count % 2) > 0) {
            $positiveOddNumbers[] = $count;
        }
    }

    return count($positiveOddNumbers);

}

echo var_dump(oddCount(15023));