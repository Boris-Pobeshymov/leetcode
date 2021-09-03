<?php
/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    $nums  = array_unique($nums);
}


/*
362 / 362 test cases passed.
Status: Accepted
Runtime: 137 ms
Memory Usage: 17.5 MB
 */
