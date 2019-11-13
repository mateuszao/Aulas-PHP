<?php

require 'Ator.php';
require 'Jogador.php';
require 'Inimigo.php';

$jogador = new Jogador;
$jogador->tomarDano();
$jogador->atirar();
var_dump($jogador);

$inimigo = new Inimigo;
$inimigo->tomarDano();
$inimigo->darPorrada();
var_dump($inimigo);
