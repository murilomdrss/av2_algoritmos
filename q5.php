<?php

$x1 = intval($argv[1]);
$x2 = intval($argv[2]);
$y1 = intval($argv[3]);
$y2 = intval($argv[4]);

$diferencaX = $x2 - $x1;
$diferencaY = $y2 - $y1;

$distancia = $diferencaX ** 2 + $diferencaY ** 2;
$distancia = sqrt($distancia);

var_dump(round($distancia));