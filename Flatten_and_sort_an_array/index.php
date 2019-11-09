<?php

function flatten_and_sort($array) {
    foreach ($array as $nestedArr) {
        foreach ($nestedArr as $element) {
            $result[] = $element;
        }
    }
    if ($result === null) {
        return [];
    } else {
        sort($result, SORT_NUMERIC);
        return $result;
    }
}

echo '<pre>';
echo var_dump(flatten_and_sort([[3, 2, 1], [4, 6, 5], [], [9, 7, 8]]));
echo '</pre>';