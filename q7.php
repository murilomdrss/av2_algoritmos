<?php 
function procurar_maior($a, $b, $c) {
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
$v_maior = procurar_maior($a, $b, $c);

var_dump($v_maior);
