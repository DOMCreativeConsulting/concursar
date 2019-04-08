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

    public function selectWhere($table,$campo,$value){

        $selecionaTodos = $this->pdo->prepare("SELECT * FROM {$table} WHERE `{$campo}` = $value");
        $selecionaTodos->execute();
        return $selecionaTodos->fetchAll(PDO::FETCH_CLASS);

    }

}

?>