<?php

include '../../vendor/autoload.php';

$pdo = Conexao::conectar($config['database']);
$query = new QueryBuilder($pdo);

$questoes = $query->selectAll('questoes');

foreach ($questoes as $questao){
    echo $questao->id;
    echo $questao->questao;
    echo $questao->ano;
}

?>