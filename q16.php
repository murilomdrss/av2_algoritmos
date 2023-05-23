<?php

$nome = $argv[1];
$array = [];

for ($i = 2; $i < $argc; $i++) {
    $array[] = $argv[$i];
}

var_dump($nome);
var_dump($array);