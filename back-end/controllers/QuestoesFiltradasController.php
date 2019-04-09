<?php

include 'vendor/autoload.php';

$campos = $_POST;

$resultado = Questao::filtrar($campos);

require 'views/QuestoesFiltradas.php';

?>