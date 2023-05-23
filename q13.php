<?php

$numeros = $argv[1];
$numeros_array = explode(" ", $numeros);
$inteiros = array_map('intval', $numeros_array);

var_dump($inteiros);