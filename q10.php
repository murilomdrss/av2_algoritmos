<?php
function fatorial_calcu($n) {
    $fat = 1;
    for ($i = 2; $i <= $n; $i++) {
        $fat *= $i;
    }
    return $fat;
}
$n = intval($argv[1]);
$fat = fatorial_calcu($n);

var_dump($fat);
