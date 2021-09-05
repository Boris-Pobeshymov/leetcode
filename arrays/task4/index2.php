<?php
/**
 * @param Integer[] $nums
 * @return Boolean
 */
function containsDuplicate($nums) {
    $count = count($nums);
    sort($nums);
    for($i = 1; $i < $count; $i++){
        if($nums[$i] == $nums[$i-1]){
            return true;
        }
    }
    return false;
}

/*
20 / 20 test cases passed.
Status: Accepted
Runtime: 44 ms
Memory Usage: 21.3 MB
 */
