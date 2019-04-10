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

    public function selectWhere($table, $filtro){

        $selecionaTodos = $this->pdo->prepare("SELECT * FROM `{$table}` WHERE `filtro` = '{$filtro}'");
        $selecionaTodos->execute();
        return $selecionaTodos->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectWhereFiltro($tabela, $campos = null){

        $query = "select * from {$tabela} where 1 ";

        foreach($campos as $campo => $valor){

            if(!empty($valor)){
            $query .= "AND `{$campo}` LIKE '%{$valor}%' ";
            }

        }
            
        try {

            $resultado = $this->pdo->prepare(utf8_decode($query));
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_CLASS);

        } catch (PDOException $exception) {

            die($exception->getMessage());

        }

    }

    public function insertInto($table, $filtro, $valor){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("INSERT INTO `$table` `filtro` VALUES ('$valor')");
        $inserir->execute();

    }

}

?>