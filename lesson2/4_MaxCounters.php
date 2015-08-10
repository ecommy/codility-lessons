<?php

/**
 * MaxCounters
 * 
 * Calculate the values of counters after applying all alternating operations: 
 * increase counter by 1; 
 * set value of all counters to current maximum.
 * 
 * @param int $N number of counters
 * @param array $A input
 * @return array calculated counters
 */
function solution($N, $A) {
    $m = count($A);

    // init counters
    $C = array();
    for ($i = 0; $i < $N; $i++) {
        $C[$i] = 0;
    }

    $max = 0;
    $minC = 0; // maximized helper value
    foreach ($A as $ai) {
        if ($ai <= $N) {
            /*
             *  increase operation
             */
            // even the value
            if($C[$ai - 1] < $minC) {
                $C[$ai - 1] = $minC;
            }
            // actual increase
            $C[$ai - 1] ++;
            // calculate max
            if ($max < $C[$ai - 1]) {
                $max = $C[$ai - 1];
            }
        } elseif ($ai == $N + 1) {
            // do not actual increase to speed up operations
            $minC = $max;
        }
    }
    // even the values
    foreach($C as &$ci) {
        if($ci < $minC) {
            $ci = $minC;
        }
    }
    return $C;
}

$input = [3, 4, 4, 6, 1, 4, 4];
$output = solution(5, $input);

print_r($output);