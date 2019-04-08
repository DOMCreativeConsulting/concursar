<?php

$router->define([

    'concursar' => 'back-end/controllers/indexController.php',
    'concursar/painel' => 'back-end/controllers/PainelController.php',
    'concursar/cadastrarQuestoes' => 'back-end/controllers/cadastrarQuestoesController.php',
    'concursar/questoesFiltradas' => 'back-end/controllers/QuestoesFiltradasController.php'

]);

?>