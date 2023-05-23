<?php

class Pessoa
{
    public $nome;
    public int $idade;
    public $dependentes = [];
}

$pessoa = new Pessoa();
$pessoa->nome = $argv[1];
$pessoa->idade = (int)$argv[2];

for ($i = 3; $i < $argc; $i++) {
    $pessoa->dependentes[] = $argv[$i];
}

var_dump($pessoa);