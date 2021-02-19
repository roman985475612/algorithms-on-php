<?php

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function bubble_soft($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $flug = false;
        for ($j = 0; $j < count($arr) - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                list($arr[$j], $arr[$j+1]) = [$arr[$j+1], $arr[$j]];
                $flug = true;
            }    
        }
        if (!$flug) {
            return $arr;
        }
    }
    return $arr;
}

$arr = [45, 5, 55, 0, 17];

debug($arr);

debug(bubble_soft($arr));
