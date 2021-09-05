<?php
/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return NULL
 */
function rotate(&$nums, $k) {
    $count = count($nums);
    if($k > $count) {
        $k = $k % $count;
    }
    $count--;
    $countNeed = $count - $k;
    $arr = [];
    for($i = $count; $i > $countNeed; $i-- ){
        $arr[$k] = $nums[$i];
        unset($nums[$i]);
        $k--;
    }
    ksort($arr);
    ksort($nums);
    $nums = array_merge($arr, $nums);
}

/*
37 / 37 test cases passed.
Status: Accepted
Runtime: 76 ms
Memory Usage: 26.2 MB
 */
