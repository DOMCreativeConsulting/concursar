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

    public function update($tabela, $campo, $valor, $whereCampo, $whereValor){
        
        $sql = sprintf(
            "UPDATE `%s` \n SET `%s` = '%s' \n WHERE `%s` = %s",
            $tabela,
            $campo,
            $valor,
            $whereCampo,
            $whereValor
        );

            $statement = $this->pdo->prepare($sql);
            $statement->execute();

    }

    public function delete($tabela, $campo, $valor){

        $sql = "DELETE FROM `{$tabela}` WHERE `{$campo}` = '$valor'";
        try {
            $statement = $this->pdo->prepare($sql)->execute();
            return $statement;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }

    }

    public function selectFiltro($table, $filtro){

        $selecionaTodos = $this->pdo->prepare("SELECT * FROM `{$table}` WHERE `filtro` = '{$filtro}'");
        $selecionaTodos->execute();
        return $selecionaTodos->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectWhere($table, $dados){

        $query = "select * from `{$table}` where 1 ";

        foreach($dados as $dado => $valor){

            if(!empty($valor)){
            $query .= "AND `{$dado}` = '{$valor}' ";
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

    public function selectWhereFiltro($tabela, $campos = null){

        $query = "select * from `{$tabela}` where 1 ";

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

    public function insert($tabela, $dados){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dados = (array)$dados;
        $query = sprintf("INSERT INTO %s(%s) values(%s)",
            $tabela, "`".implode('`, `', array_keys($dados))."`",
            "'" . implode("', '", $dados)."'");

            $statement = $this->pdo->prepare($query);
            $statement->execute();

    }

    public function insertInto($table, $campoFiltro, $campoValor, $filtro, $valor){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("INSERT INTO `$table` (`$campoFiltro`, `$campoValor`) VALUES ('$filtro', '$valor')");
        $inserir->execute();

    }

}

?>