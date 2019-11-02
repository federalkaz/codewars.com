<?php

function maxMultiple($divisor, $bound) {
    while (($bound % $divisor) !== 0) {
        $bound--;
    }
    return $bound;
}

echo maxMultiple(2, 7);