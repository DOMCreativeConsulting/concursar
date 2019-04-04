<?php

include '../../vendor/autoload.php';
include '../core/QueryConfig.php';

$questoes = $query->selectAll('questoes');

foreach ($questoes as $questao){
    echo $questao->id;
    echo $questao->questao;
    echo $questao->ano;
}

?>