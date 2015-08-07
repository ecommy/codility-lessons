<?php

/**
 * TapeEquilibrium 
 * 
 * Minimize the value |(A[0] + ... + A[P-1]) - (A[P] + ... + A[N-1])|. 
 * 
 * @param array $A
 * @return int
 */
function solution($A) {
    $n = count($A);

    // calculate initial sum - O(n)
    $S = array_sum($A);

    $D = null; // the diference between the two parts
    $SL = 0; // sum of the left part
    $minimum_abs_difference = null; // the minimum sum as required by the exercise

    for ($p = 1; $p < $n; $p++) {
        $SL += $A[$p - 1];
        $D = abs($S - 2 * $SL);
        if ($minimum_abs_difference === NULL) {
            $minimum_abs_difference = $D;
        }

        if ($D < $minimum_abs_difference) {
            $minimum_abs_difference = $D;
        }
    }

    return $minimum_abs_difference;
}


$input = [3, 1, 2, 4, 3];
$output = solution($input);

echo $output;