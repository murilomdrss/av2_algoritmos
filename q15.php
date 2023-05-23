<?php

$array = array_slice($argv, 1);

$total = 0;

foreach ($array as $value) {
    $total += floatval($value);
}

$media = $total / count($array);

var_dump($media);