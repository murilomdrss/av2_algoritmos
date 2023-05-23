<?php

class Pessoa
{
    public $nome;
    public int $idade;
    public $dependentes = [];
}

$array = [];

for ($i = $argc - 1; $i > 1; $i -= 2) {
    $pessoa = new Pessoa();
    $pessoa->nome = $argv[$i - 1];
    $pessoa->idade = intval($argv[$i]);
    $array[] = $pessoa;
}

$pessoaPrincipal = array_pop($array);
$pessoaPrincipal->dependentes = array_reverse($array);

var_dump($pessoaPrincipal);
