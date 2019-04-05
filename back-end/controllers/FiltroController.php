<?php

require 'vendor/autoload.php';

$resultado = Questao::buscar();

require_once 'views/index.php';

?>