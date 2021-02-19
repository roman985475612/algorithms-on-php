<?php

function dd($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function get_sum(string $num1, string $num2): string
{
    if (strlen($num1) > strlen($num2)) {
        $num2 = str_pad($num2, strlen($num1), '0', STR_PAD_LEFT);
    } else if (strlen($num1) < strlen($num2)) {
        $num1 = str_pad($num1, strlen($num2), '0', STR_PAD_LEFT);
    }
    
    $res = '';
    
    $sub = 0;
    
    for ($i = strlen($num1) - 1; $i >= 0; $i--) {
        $sum = $num1[$i] + $num2[$i] + $sub;
        $res .= $sum % 10;
        $sub = ($sum > 9) ? 1 : 0;
    }
    
    if ($sub) {
        $res .= $sub;
    }
    
    return strrev($res);
}

$num1 = '111111111111111111111';
$num2 = '222222222222222222222';

dd(get_sum($num1, $num2));