<?php

require 'vendor/autoload.php';

class QueryBuilder{
    
    public function __construct($pdo){

        $this->pdo = $pdo;

    }    

    public function selectAll($table){

        $selecionaTodos = $this->pdo->prepare("SELECT * FROM {$table}");
        $selecionaTodos->execute();
        return $selecionaTodos->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectWhere($table,$id){

        $selecionaTodos = $this->pdo->prepare("SELECT * FROM {$table} WHERE `id` = $id");
        $selecionaTodos->execute();
        return $selecionaTodos->fetchAll(PDO::FETCH_CLASS);

    }

}

?>