<?php

include 'vendor/autoload.php';

class Comentarios
{
    public static function buscar()
    {
        $query = Query::config();
        $resultado = $query->selectAll('que_comentarios');
        return $resultado;
    }
}