<?php
function exibir_numeros($n) {
    $resultado = '';

    for ($i = 1; $i <= $n; $i++) {
        $resultado .= $i . ' ';
    }

    return trim($resultado);
}

$n = intval($argv[1]);
$sequencia_numeros = exibir_numeros($n);

var_dump($sequencia_numeros);
