<?php

$router->define([

    'concursar' => 'back-end/controllers/indexController.php',
    'concursar/painel' => 'back-end/controllers/PainelController.php',
    'concursar/cadastrarQuestoes' => 'back-end/controllers/cadastrarQuestoesController.php',
    'concursar/questoesFiltradas' => 'back-end/controllers/QuestoesFiltradasController.php',
    'concursar/cadastrarFiltros' => 'back-end/controllers/cadastrarFiltrosController.php',
    'concursar/cadastrar' => 'back-end/controllers/cadastrarUsuarioController.php',
    'concursar/login' => 'back-end/controllers/loginController.php',
    'concursar/logout' => 'back-end/controllers/logoutController.php',
    'concursar/usuarios' => 'back-end/controllers/usersController.php',
    'concursar/questoes' => 'back-end/controllers/questoesController.php',
    'concursar/filtros' => 'back-end/controllers/filtrosController.php',
    'concursar/deletar' => 'back-end/controllers/deleteController.php',
    'concursar/atualizar' => 'back-end/controllers/atualizarController.php',
    'concursar/reportar-erro' => 'back-end/controllers/reportarErroController.php',
    'concursar/reportar' => 'back-end/controllers/reportarController.php',
    'concursar/comentar' => 'back-end/controllers/comentarController.php',
    'concursar/rename' => 'back-end/controllers/renameController.php'

]);

?>