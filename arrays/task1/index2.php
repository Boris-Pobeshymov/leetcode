<?php
/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    $count = count($nums);
    for($i = 1; $i< $count; $i++){
        if($nums[$i] == $nums[$i - 1]){
            unset($nums[$i - 1]);
        }
    }
}


/*
362 / 362 test cases passed.
Status: Accepted
Runtime: 35 ms
Memory Usage: 17.6 MB
 */
