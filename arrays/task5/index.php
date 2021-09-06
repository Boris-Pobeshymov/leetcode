<?php
/**
 * @param Integer[] $nums
 * @return Integer
 */
function singleNumber($nums) {
    $nums = array_count_values($nums);
    foreach($nums as $key => $num){
        if($num == 1){
            return $key;
        }
    }
    return false;
}

/*
61 / 61 test cases passed.
Status: Accepted
Runtime: 36 ms
Memory Usage: 18.1 MB
*/
