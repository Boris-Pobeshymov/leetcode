<?php
/**
 * @param Integer[] $nums
 * @return Boolean
 */
function containsDuplicate($nums) {
    $count = count($nums);
    $check = [];
    for($i = 0; $i < $count; $i++){
        if(!in_array($nums[$i], $check)){
            $check[] = $nums[$i];
        }else{
            return true;
        }
    }
    return false;
}

/*
20 / 20 test cases passed.
Status: Accepted
Runtime: 1912 ms
Memory Usage: 21.2 MB
 */
