<?php

$router->define([

    'questoes' => 'back-end/controllers/indexController.php',
    'questoes/painel' => 'back-end/controllers/PainelController.php',
    'questoes/cadastrarQuestoes' => 'back-end/controllers/cadastrarQuestoesController.php',
    'questoes/questoesFiltradas' => 'back-end/controllers/QuestoesFiltradasController.php',
    'questoes/cadastrarFiltros' => 'back-end/controllers/cadastrarFiltrosController.php',
    'questoes/cadastrar' => 'back-end/controllers/cadastrarUsuarioController.php',
    'questoes/login' => 'back-end/controllers/loginController.php',
    'questoes/logout' => 'back-end/controllers/logoutController.php',
    'questoes/usuarios' => 'back-end/controllers/usersController.php',
    'questoes/questoes' => 'back-end/controllers/questoesController.php',
    'questoes/filtros' => 'back-end/controllers/filtrosController.php',
    'questoes/deletar' => 'back-end/controllers/deleteController.php'

]);

?>