<?php

function countsheep($num){

    for ($sheeps = []; $num > 0; $num--) {
        $sheeps[] = "$num sheep...";
    }

    return implode('',array_reverse($sheeps));

}

echo countsheep(5);