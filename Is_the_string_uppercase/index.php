<?php

function is_uppercase($str) {
    for ($count = 0; strlen($str) >= $count; $count++) {
        if ($str[$count] == strtoupper($str[$count])) {
            continue;
        } else {
            return false;
        }
    }
    return true;
}

echo is_uppercase('STR');