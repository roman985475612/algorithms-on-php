<?php

function dd($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function insert_sort($arr)
{
    $cnt = count($arr);
    if ($cnt < 2) {
        return $arr;
    }
    
    for ($i = 1; $i < $cnt; $i++) {
        $cur_item = $arr[$i];
        $prev_index = $i - 1;
        
        while (isset($arr[$prev_index]) && $arr[$prev_index] > $cur_item) {
            $arr[$prev_index+1] = $arr[$prev_index];
            $arr[$prev_index] = $cur_item;
            $prev_index--;
        }
    }
    
    return $arr;
}

$nums = [45, 3, 8, 0, 4];

dd($nums);

dd(insert_sort($nums));