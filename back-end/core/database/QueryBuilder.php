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

    public function selectWhere($tabela, $campos = null){

        $query = "select * from {$tabela}";

        if (current($campos) == $campos[0]) {
            // We are at the first element
        }


        //$query .= ($campos) ? " where " . implode(' = ',  $campos) : "";

        var_dump($query);
        die();
        try {

            $resultado = $this->pdo->prepare($query);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_CLASS);

        } catch (PDOException $exception) {

            die($exception->getMessage());

        }

    }

}

?>