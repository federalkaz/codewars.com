<?php

function spacify(string $s): string {
    for($count = 0, $newString = ''; $count < mb_strlen($s); $count++) {
        $newString .= $s[$count] . ' ';
    }
    return rtrim($newString);
}

echo var_dump(spacify('Hello world!'));