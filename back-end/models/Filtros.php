<?php

include 'vendor/autoload.php';

class Filtro{

    public static function buscar($filtro){
        $query = Query::config();
        $resultado = $query->selectWhere('filtros', $filtro);
        return $resultado;
    }

}

?>