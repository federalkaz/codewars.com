<?php

function camel_case(string $str): string
{
    return preg_replace("/ /", "", ucwords($str));
}
