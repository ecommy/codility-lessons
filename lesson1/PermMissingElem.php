<?php

/**
 * PermMissingElem
 * Find the missing element in a given permutation.
 * 
 * @param int $A = [a0, a1, ..ai.. , an-1] where ai is between [1, N+1] where N = count(A)
 * @return int - missing element
 */
function solution($A) {
    $n = count($A);
    // no elements in array means single remaining one is 1
    if ($n == 0) {
        return 1;
    }

    for ($i = 1; $i <= $n + 1; $i++) {
        $full_array[] = $i;
    }

    foreach ($A as $value) {
        unset($full_array[$value - 1]);
    }

    return current($full_array);
}

$input = [1];
$output = solution(array(1));
echo $output;

