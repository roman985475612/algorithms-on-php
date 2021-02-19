<?php

function dd($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function get_nums(int $n)
{
    if ($n == 1) {
        return $n;
    }
    return get_nums($n - 1) . ' ' . $n;
}

dd(get_nums(12));