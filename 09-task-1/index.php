<?php

function dd($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function offset($arr, $cnt)
{
    if ($cnt == count($arr)) {
        return $arr;
    } else if ($cnt > count($arr)) {
        $cnt -= count($arr);
    }
    
    for ($i = 0; $i < $cnt; $i++) {
        for ($j = 0; $j < count($arr) - 1; $j++) {
            list($arr[$j], $arr[$j+1]) = [$arr[$j+1], $arr[$j]];
        }
    }
    
    return $arr;
}

function circulation($arr, $cnt = 1)
{
    // if ($cnt === count($arr)) {
        // return $arr;
    // } else if ($cnt > count($arr)) {
        // $cnt %= count($arr);
    // }
    $cnt %= count($arr);
    for ($i = 0; $i < $cnt; $i++) {
        $el = array_shift($arr);
        $arr[] = $el;
        dd($arr);
    }
    
    return $arr;
}


$nums = [1, 2, 3, 4, 5];

dd($nums);

circulation($nums, 102);