<?php
function tempo($tmp) {
$horas = intdiv($tmp, 3600);
$minutos = intdiv(($tmp % 3600), 60);
$segundos = $tmp % 60;
$formato = $horas . "h" . $minutos . "m" . $segundos . "s";
    return $formato;
}
$tmp = intval($argv[1]);
$resultado = tempo($tmp);

var_dump($resultado);