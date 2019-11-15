<?php

function partsSums($ls)
{
    for ($counter = 0, $res = []; $counter <= count($ls); $counter++) {
        $res[] = array_sum(array_slice($ls, $counter));
    }

    return $res;
}


echo var_dump(partsSums([744125, 935, 407, 454, 430, 90, 144, 6710213, 889, 810, 2579358]));