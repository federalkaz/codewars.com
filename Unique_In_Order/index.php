<?php

function uniqueInOrder($iterable)
{
    if (is_string($iterable)) {
        $iterable = str_split($iterable);
    }
    for ($count = 0, $res = []; $count <= count($iterable); $count++) {
        if ($iterable[$count] == $iterable[$count+1]) {
            continue;
        } else {
            $res[] = $iterable[$count];
        }
    }
    return $res;
}

echo var_dump(uniqueInOrder([1,2,2,3,3]));