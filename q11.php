<?php

$n = intval($argv[1]);

if ($n == 1 || $n == 2) {
    $resultado = 1;
} else {
    $anterior = 1;
    $posterior = 1;
    for ($i = 3; $i <= $n; $i++) {
        $resultado = $anterior + $posterior;
        $posterior = $anterior;
        $anterior = $resultado;
    }
}

var_dump($resultado);