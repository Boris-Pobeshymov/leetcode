<?php
/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Integer[]
 */
function intersect($nums1, $nums2) {
    $hash = [];

    for ($i = 0; $i < count($nums1); $i++) {
        if (!isset($hash[$nums1[$i]])) {
            $hash[$nums1[$i]] = 0;
        }

        $hash[$nums1[$i]] += 1;
    }

    $result = [];
    for ($i = 0; $i < count($nums2); $i++) {
        if (isset($hash[$nums2[$i]]) && $hash[$nums2[$i]] > 0) {
            $result[] = $nums2[$i];
            $hash[$nums2[$i]] = $hash[$nums2[$i]] - 1;
        }
    }

    return $result;
}


/*
55 / 55 test cases passed.
Status: Accepted
Runtime: 12 ms
Memory Usage: 15.8 MB
 */
