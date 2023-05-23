<?php
function calcular_media($numeros) {
    $soma = 0;
    $quantidade = count($numeros);

    foreach ($numeros as $numero) {
        $soma += $numero;
    }

    $media = $soma / $quantidade;
    return $media;
}

$entrada = array_slice($argv, 1);
$numeros = array_map('floatval', $entrada);
$media = calcular_media($numeros);

var_dump($media);
