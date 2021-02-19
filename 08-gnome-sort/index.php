<?php

function dd($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function gnome_sort($arr)
{
    $cnt = count($arr);
    if ($cnt < 2) {
        return $arr;
    }
    
    $i = 1;
    $j = 2;
    
    while ($i < $cnt) {
        if ($arr[$i-1] <= $arr[$i]) {
            $i = $j++;
        } else {
            list($arr[$i], $arr[$i-1]) = [$arr[$i-1], $arr[$i]];
            $i--;
            if ($i == 0) {
                $i = $j++;
            }
        }
    }
    
    return $arr;
}

$nums = range(0, 9);
Shuffle($nums);

dd($nums);

dd(gnome_sort($nums));