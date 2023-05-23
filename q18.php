<?php

$caminho = $argv[1];

$arquivo = file_get_contents($caminho);

var_dump($arquivo);