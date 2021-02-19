<?php

function selection_sort($arr)
{
    $cnt = count($arr);
    if ($cnt < 2) {
        return $arr;
    }
    
    for ($i = 0; $i < $cnt; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $cnt; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        list($arr[$i], $arr[$min]) = [$arr[$min], $arr[$i]];
    }
    
    return $arr;
}

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$nums = [14, 5, 8, 2, 0, -1];

debug($nums);

debug(selection_sort($nums));