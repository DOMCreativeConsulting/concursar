<?php

    include 'vendor/autoload.php';

    $campos = $_POST;
    $resultado = Questao::filtrar($campos);
    $disciplina = Filtro::buscar('Disciplina');

    require 'views/QuestoesFiltradas.php';

?>