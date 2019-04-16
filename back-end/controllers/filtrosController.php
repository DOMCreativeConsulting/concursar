<?php

    include 'vendor/autoload.php';

    User::check('adminOnly');

    $filtros = Filtro::buscarTodos();
    
    require 'views/listaFiltros.php';

?>