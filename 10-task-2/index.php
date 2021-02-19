<?php

function dd($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function get_sum($n): int
{
    return ($n < 10) ? $n : $n % 10 + get_sum($n / 10);
}

dd(get_sum(1234));