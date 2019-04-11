<?php

    include 'vendor/autoload.php';

    $campos = $_POST;
    $resultado = Questao::filtrar($campos);
    $disciplina = Filtro::buscar('Disciplina');
    $assunto = Filtro::buscar('Assunto');
    $banca = Filtro::buscar('Banca');
    $instituicao = Filtro::buscar('Instituicao');
    $cargo = Filtro::buscar('Cargo');
    $area_formacao = Filtro::buscar('Area_Formacao');
    $area_atuacao = Filtro::buscar('Area_Atuacao');

    require 'views/QuestoesFiltradas.php';

?>