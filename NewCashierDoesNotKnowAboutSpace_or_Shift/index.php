<?php

function getOrder($input) {
    $menu = ['Burger', 'Fries', 'Chicken', 'Pizza', 'Sandwich', 'Onionrings', 'Milkshake', 'Coke'];
    $res = [];
    foreach ($menu as $element) {
        $number = substr_count($input, lcfirst($element));
        if ($number > 0) {
            $res[$element] = $number;
        }
        $number = null;
    }
    $str = '';
    foreach ($res as $item => $sum) {
        while($sum > 0) {
            $str .= $item . ' ';
            $sum--;
        }
    }
    return rtrim($str);
}

echo '<pre>';
echo var_dump(getOrder('burgerfriesfriesfriesfriesfriespizzasandwichcokefriesburger'));
echo '</pre>';