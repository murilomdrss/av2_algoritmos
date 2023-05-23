<?php
function converter_tempo($t) {
    $horas = intdiv($t, 3600);
    $minutos = intdiv(($t % 3600), 60);
    $segundos = $t % 60;

    $formato_tempo = $horas . "h" . $minutos . "m" . $segundos . "s";

    return $formato_tempo;
}

$t = intval($argv[1]);
$tempo_formatado = converter_tempo($t);

var_dump($tempo_formatado);