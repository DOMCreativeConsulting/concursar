<?php

include 'vendor/autoload.php';

$questoes = Questao::buscar();
$disciplina = Filtro::buscar('Disciplina');

require 'views/index.php';

?>