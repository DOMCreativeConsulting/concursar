<?php

require 'vendor/autoload.php';

User::check();

$questoes = Questao::buscar();
$usuarios = User::buscar();
$filtros = Filtro::buscarTodos();

require_once 'views/painel.php';

?>