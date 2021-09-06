<?php
/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Integer[]
 */
function intersect($nums1, $nums2) {
    $hash = [];
    $countNum1 = count($nums1);
    for ($i = 0; $i < $countNum1; $i++) {
        !isset($hash[$nums1[$i]]) ? $hash[$nums1[$i]] = 1 : $hash[$nums1[$i]]++;
    }
    $result = [];
    $countNum2 = count($nums2);
    for ($i = 0; $i < $countNum2; $i++) {
        if (isset($hash[$nums2[$i]]) && $hash[$nums2[$i]] > 0) {
            $result[] = $nums2[$i];
            $hash[$nums2[$i]]--;
        }
    }
    return $result;
}

/*
55 / 55 test cases passed.
Status: Accepted
Runtime: 35 ms
Memory Usage: 15.8 MB
 */
