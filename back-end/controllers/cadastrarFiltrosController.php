<?php

include 'vendor/autoload.php';

$disciplinas = Filtro::buscar('Disciplina');

require 'views/filtros.php';

?>