<?php

$start1 = intval($argv[1]);
$end1 = intval($argv[2]);
$start2 = intval($argv[3]);
$end2 = intval($argv[4]);

$conflito = true;

if (($start1 < $end2 && $start2 < $end1) || ($start1 < $start2 && $end1 > $start2) || ($start2 < $start1 && $end2 > $start1)) {
    $conflito = false;
}

var_dump($conflito);