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

        $query = "select * from {$tabela} where 1 ";

        foreach($campos as $campo => $valor){

            if(!empty($valor)){
            $query .= "AND {$campo} = {$valor} ";
            }

        }
            
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