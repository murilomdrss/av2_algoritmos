<?php 
function encontrar_maior($a, $b, $c) {
    $maior = $a;

    if ($b > $maior) {
        $maior = $b;
    }

    if ($c > $maior) {
        $maior = $c;
    }

    return $maior;
}

$a = intval($argv[1]);
$b = intval($argv[2]);
$c = intval($argv[3]);

$maior_valor = encontrar_maior($a, $b, $c);

var_dump($maior_valor);
