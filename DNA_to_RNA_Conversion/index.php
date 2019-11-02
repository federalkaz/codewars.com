<?php

function dnaToRna($str) {
    for ($result = '', $i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === 'T') {
            $str[$i] = 'U';
        } elseif ($str[$i] === 'U') {
            $str[$i] = 'T';
        }
        $result .= $str[$i];
    }
    return $result;
}

echo dnaToRna('GCAU');