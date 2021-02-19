<?php

$nums = range(1, 100);

function binary_search($arr, $item, $start, $final)
{
    if ($start > $final) {
        return false;
    }

    $half = (int) (($start + $final) / 2);

    if ($arr[$half] < $item) {
        return binary_search($arr, $item, $half + 1, $final);
    } else if ($arr[$half] > $item) {
        return binary_search($arr, $item, $start, $half - 1);
    } else {
        return $half;
    }
}

var_dump(binary_search($nums, 10, 0, count($nums) - 1));