<?php

include 'vendor/autoload.php';

class Questao{

    public static function buscar(){

        $query = Query::config();
        $resultado = $query->selectAll('questoes');
        return $resultado;

    }

    public static function filtrar($campos){

        $query = Query::config();
        $resultado = $query->selectWhereFiltro('questoes',$campos);
        return $resultado;

    }

}

?>