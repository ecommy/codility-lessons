<?php

/**
 * FrogJmp
 * 
 * Count minimal number of jumps from position X to Y.
 * 
 * @param int $X - starting position
 * @param int $Y - end position
 * @param int $D - length of jump
 * 
 * @return int
 */
function solution($X, $Y, $D) {
    if ($D <= 0) {
        return -1;
    }
    /**
     * we notice X+kD<=Y where k = number of jumps
     */
    $k = ceil(($Y - $X) / $D);
    return (int)$k;
}

echo solution(-30, 1000000000, 1000000000);
