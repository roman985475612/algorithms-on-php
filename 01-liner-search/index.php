<?php

$nums = range(1, 1000);
shuffle($nums);

function linear_search($arr, $item)
{
    foreach ($arr as $key => $value) {
        if ($value === $item) {
            return $key;
        }
    }

    return false;
}

var_dump(linear_search($nums, 100));
