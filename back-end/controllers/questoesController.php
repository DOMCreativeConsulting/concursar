<?php

    include 'vendor/autoload.php';

    User::check('adminOnly');

    $questoes = Questao::buscar();
    
    require 'views/questoes.php';

?>