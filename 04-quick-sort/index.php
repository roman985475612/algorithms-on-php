<?php

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function quick_sort($arr)
{
    if (count($arr) < 2) {
        return $arr;
    }

    $pivot = $arr[0];

    $left_arr = $right_arr = [];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] <= $pivot) {
            $left_arr[] = $arr[$i];
        } else {
            $right_arr[] = $arr[$i];
        }
    }

    $left_arr = quick_sort($left_arr);
    $right_arr = quick_sort($right_arr);

    return array_merge($left_arr, [$pivot], $right_arr);
}

$arr = [45, 5, 55, 0, 17];

debug($arr);

debug(quick_sort($arr));
