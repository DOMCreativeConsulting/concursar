<?php

    include 'vendor/autoload.php';

    User::check('adminOnly');

    $filtros = Filtro::getPostedItems();

    Filtro::cadastrar($filtros);

    $disciplinas = Filtro::buscar('Disciplina');
    $assuntos = Filtro::buscar('Assunto');
    $bancas = Filtro::buscar('Banca');
    $instituicoes = Filtro::buscar('Instituicao');
    $cargos = Filtro::buscar('Cargo');
    $areas_formacao = Filtro::buscar('Area_Formacao');
    $areas_atuacao = Filtro::buscar('Area_Atuacao');

    require 'views/filtros.php';

?>