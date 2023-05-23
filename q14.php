<?php

$numeros = $argv[1];
$numeros_array = explode (" ", $numeros);
$media = array_sum($numeros_array) / count($numeros_array);

var_dump($media);