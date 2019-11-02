<?php

function stairsIn20($arr) {
    $result = 0;
    foreach ($arr as $days) {
        $result += array_sum($days) * 20;
    }
    return $result;
}

echo stairsIn20([[1, 2], [3, 4], [5, 10]]);