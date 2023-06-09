<?php


// 5! = 5 * 4 * 3 * 2 * 1
// n=1 => 1
// n * (n-1)!

function fact($n)
{
    if ($n == 1) {
        return 1;
    }
    return $n * fact($n - 1);
}
