<?php

include '../../vendor/autoload.php';

class Questao{

    public static function buscar(){

        $query = Query::config();
        $resultado = $query->selectAll('questoes');
        return $resultado;

    }

}

?>