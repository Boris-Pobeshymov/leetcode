<?php
/**
 * @param Integer[] $prices
 * @return Integer
 */
function maxProfit($prices) {
    $last = count($prices) - 1;
    $totalMax = 0;
    for($i = $last; $i > 0; $i--){
        $max = -1;
        $currentIterationMax = -1;
        for($j = $i - 1; $j >= 0; $j--){
            $diff = $prices[$i] - $prices[$j];
            if($diff > $max && $diff - $currentIterationMax > $currentIterationMax){
                $max = $diff;
                $currentIterationMax = $diff;
            }else{
                break;
            }
        }
        if($max>0) {
            $i = $j + 2;
            $totalMax += $max;
        }

    }
    return $totalMax;
}

//$array = [7,1,5,3,6,4];
//$array = [1,2,3,4,5];
//$array = [6,1,3,2,4,7];
$array = [2,6,8,7,8,7,9,4,1,2,4,5,8];
var_dump(maxProfit($array));


/*
200 / 200 test cases passed.
Status: Accepted
Runtime: 16 ms
Memory Usage: 17.6 MB
 */
