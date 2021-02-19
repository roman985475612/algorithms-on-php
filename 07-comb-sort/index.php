<?php

function dd($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function comb_sort($arr)
{
    $cnt = count($arr);
    if ($cnt < 2) {
        return $arr;
    }
    
    $gap = $cnt;
    
    $swap = true;
    
    while ($gap > 1 || $swap) {
        if ($gap > 1) $gap /= 1.25;
        
        $swap = false;
        
        for ($i = 0; $i + $gap < $cnt; $i++) {
            if ($arr[$i] > $arr[$i + $gap]) {
                list($arr[$i], $arr[$i + $gap]) = [$arr[$i + $gap], $arr[$i]];
                $swap = true;
            }
        }
    }
    
    return $arr;
}

$nums = range(0, 9);
Shuffle($nums);

dd($nums);

dd(comb_sort($nums));