<?php

include 'vendor/autoload.php';

class Questao{

    public static function buscar(){

        $query = Query::config();
        $resultado = $query->selectAll('questoes');
        return $resultado;

    }

    public static function cadastrar($filtros){

        $query = Query::config();
        if(isset($filtros['disciplina'])){
            $query->insertInto('questoes', 'disciplina', 'valor', 'Disciplina', $filtros['disciplina']);
        }
        if(isset($filtros['assunto'])){
            $query->insertInto('questoes', 'filtro', 'valor', 'Assunto', $filtros['assunto']);
        }
        if(isset($filtros['banca'])){
            $query->insertInto('questoes', 'filtro', 'valor', 'Banca', $filtros['banca']);
        }
        if(isset($filtros['instituicao'])){
            $query->insertInto('questoes', 'filtro', 'valor', 'Instituicao', $filtros['instituicao']);
        }
        if(isset($filtros['cargo'])){
            $query->insertInto('questoes', 'filtro', 'valor', 'Cargo', $filtros['cargo']);
        }
        if(isset($filtros['area_formacao'])){
            $query->insertInto('questoes', 'filtro', 'valor', 'Area_Formacao', $filtros['area_formacao']);
        }
        if(isset($filtros['area_atuacao'])){
            $query->insertInto('questoes', 'filtro', 'valor', 'Area_Atuacao', $filtros['area_atuacao']);
        }

    }

    public static function filtrar($campos){

        $query = Query::config();
        $resultado = $query->selectWhereFiltro('questoes',$campos);
        return $resultado;

    }

}

?>