<?php

/*
 * MissingInteger
 * Find the minimal positive integer not occurring in a given sequence.
 * 
 * @param array $A
 * @retun int -  the minimal positive integer (greater than 0) that does not occur in A
 */

function solution($A) {
    $n = count($A);
    $candidate = 1;
    $counter_A = array();
    foreach ($A as $ai) {
        // keep > 0
        if ($ai <= 0) {
            continue;
        }
        // count occurences
        if (!isset($counter_A[$ai])) {
            $counter_A[$ai] = 1;
        } else {
            $counter_A[$ai] ++;
        }
    }
    // find the solution
    $i=0;
    do {
        $i++;
        if (!isset($counter_A[$i])) {
            return $i;
        }
    } while ($i<2147483647);
}

$input = [1, 3, 6, 4, 1, 2];
echo solution($input);
