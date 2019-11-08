<?php

function minMinMax($array) {
    sort($array, SORT_NUMERIC);
    $res[] = min($array);
    for ($count = $res[0] + 1; $count < max($array); $count++) {
        if (in_array($count, $array)) {
            continue;
        } else {
            $res[1] = $count;
            break;
        }
    }
    $res[] = max($array);
    return $res;
}

echo var_dump(minMinMax([-1, 4, 5, -23, 24]));
