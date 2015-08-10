<?php

/**
 * PermCheck 
 * Check whether array A is a permutation.
 * 
 * @param array $A
 * @return int - 1=permutation; 0=it is not
 */
function solution($A) {
    $n = count($A);
    // keeps how many numbers are distinct but bellow n
    $distinct_counter=0;
    
    // counts the number of occurences of a certain number from A
    $counter_A = array();
    for($i=0; $i<$n; $i++) {
        if(!isset($counter_A[$A[$i]])) {
            $counter_A[$A[$i]] = 1;
        } else {
            $counter_A[$A[$i]]++;
        }
        // number occurs for the first time and is <=n
        if($counter_A[$A[$i]] == 1 && $A[$i]<=$n) {
            $distinct_counter++;
            if($distinct_counter==$n) {
                return 1;
            }
        }
    }
    return 0;
}

$input = [4,1,3,2];

echo solution($input);