<?php

include 'vendor/autoload.php';

class Query{

    public static function config(){

        $config = include 'database/Config.php';
        $pdo = Conexao::conectar($config['database']);
        $query = new QueryBuilder($pdo);
        return $query;

    }

}
