<?php
/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Integer[]
 */
function intersect($nums1, $nums2) {
    $array = [];
    foreach($nums1 as $num){
        $count = count($nums2);
        for($i=0;$i<$count;$i++){
            if($nums2[$i] == $num){
                $array[] = $num;
                unset($nums2[$i]);
                $nums2 = array_values($nums2);
                break;
            }
        }
    }
    return $array;
}

/*
55 / 55 test cases passed.
Status: Accepted
Runtime: 68 ms
Memory Usage: 15.8 MB
 */
