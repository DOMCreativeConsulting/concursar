<?php

include 'vendor/autoload.php';

$resultado = Questao::buscar();

require 'views/index.php';

?>