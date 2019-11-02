<?php

function numberToString($num)
{
    return (string) $num;
}

echo gettype(numberToString(157)) . '--' . numberToString(157);