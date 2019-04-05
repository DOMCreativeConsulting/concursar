<?php

include '../../vendor/autoload.php';

$resultado = Questao::buscar();

View::load('index');

?>