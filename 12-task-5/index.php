<?php

function dd($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function get_nums(int $a, int $b)
{
    if ($a == $b) {
        return $a;
    }
    return $a . ' ' . get_nums(($a > $b) ? $a - 1 : $a + 1, $b);
}

dd(get_nums(1, 20));
dd(get_nums(20, 1));