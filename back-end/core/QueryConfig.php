<?php

$config = include 'database/Config.php';
$pdo = Conexao::conectar($config['database']);
$query = new QueryBuilder($pdo);