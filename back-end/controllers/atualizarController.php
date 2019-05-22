<?php

    include 'vendor/autoload.php';

    User::check('adminOnly');

    Questao::atualizar();

?>