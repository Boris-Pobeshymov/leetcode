<?php
/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Integer[]
 */
function intersect($nums1, $nums2) {
    $hash = [];

    $count1 = count($nums1);
    for ($i = 0; $i < $count1; $i++) {
        if (!isset($hash[$nums1[$i]])) {
            $hash[$nums1[$i]] = 0;
        }

        $hash[$nums1[$i]] += 1;
    }

    $result = [];
    $count2 = count($nums2);
    for ($i = 0; $i < $count2; $i++) {
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
Runtime: 16 ms
Memory Usage: 15.8 MB
 */
