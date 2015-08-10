<?php

/**
 * FrogRiverOne 
 * Find the earliest time when a frog can jump to the other side of a river.
 * 
 * @param int $X - the other side of river position (frog starts at 0)
 * @param array $A - falling leaves - index = time - value = position
 * @return int - when frog crosses the river
 */
function solution($X, $A) {
    $distinct_leaf_positions = 0;
    $n = count($A);
    
    $leaf_positions = array(); // track leaf positions
    for($t=0; $t<$n; $t++) {
        if(!isset($leaf_positions[$A[$t]])) {
            $distinct_leaf_positions++;
            $leaf_positions[$A[$t]] = 1;
        }
        $leaf_positions[$A[$t]]++; 
        if($distinct_leaf_positions == $X) {
            return $t;
        }
    }
    return -1;
}

$input = [1, 3, 1, 4, 2, 3, 5, 4];
$X = 5;

echo solution($X, $input);