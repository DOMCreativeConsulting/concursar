<?php

include 'vendor/autoload.php';

User::check('adminOnly');

$filtros = Filtro::getPostedItems();

$disciplinas = Filtro::buscar('Disciplina');
$assuntos = Filtro::buscar('Assunto');
$bancas = Filtro::buscar('Banca');
$instituicoes = Filtro::buscar('Instituicao');
$cargos = Filtro::buscar('Cargo');
$Areas_Formacao = Filtro::buscar('Area_Formacao');
$Areas_Atuacao = Filtro::buscar('Area_Atuacao');

Questao::cadastrar();

require 'views/cadastrarQuestoes.php';

?>