<?php
function calcular_fatorial($n) {
    $fatorial = 1;

    for ($i = 2; $i <= $n; $i++) {
        $fatorial *= $i;
    }

    return $fatorial;
}

$n = intval($argv[1]);
$fatorial = calcular_fatorial($n);

var_dump($fatorial);
