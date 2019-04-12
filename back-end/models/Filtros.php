<?php

include 'vendor/autoload.php';

class Filtro{

    public static function buscar($filtro){
        $query = Query::config();
        $resultado = $query->selectFiltro('filtros', $filtro);
        return $resultado;
    }

    public static function buscarTodos(){
        $query = Query::config();
        $resultado = $query->selectAll('filtros');
        return $resultado;
    }

    public static function cadastrar($filtros){
        $query = Query::config();
        if(isset($filtros['disciplina'])){
            $query->insertInto('filtros', 'filtro', 'valor', 'Disciplina', $filtros['disciplina']);
        }
        if(isset($filtros['assunto'])){
            $query->insertInto('filtros', 'filtro', 'valor', 'Assunto', $filtros['assunto']);
        }
        if(isset($filtros['banca'])){
            $query->insertInto('filtros', 'filtro', 'valor', 'Banca', $filtros['banca']);
        }
        if(isset($filtros['instituicao'])){
            $query->insertInto('filtros', 'filtro', 'valor', 'Instituicao', $filtros['instituicao']);
        }
        if(isset($filtros['cargo'])){
            $query->insertInto('filtros', 'filtro', 'valor', 'Cargo', $filtros['cargo']);
        }
        if(isset($filtros['area_formacao'])){
            $query->insertInto('filtros', 'filtro', 'valor', 'Area_Formacao', $filtros['area_formacao']);
        }
        if(isset($filtros['area_atuacao'])){
            $query->insertInto('filtros', 'filtro', 'valor', 'Area_Atuacao', $filtros['area_atuacao']);
        }

    }

    public static function getPostedItems(){

        if(isset($_POST['disciplina'])){
            $disciplina = $_POST['disciplina'];
            $filtros['disciplina'] = $disciplina;
        }
        if(isset($_POST['assunto'])){
            $assunto = $_POST['assunto'];
            $filtros['assunto'] = $assunto;
        }
        if(isset($_POST['banca'])){
            $banca = $_POST['banca'];
            $filtros['banca'] = $banca;
        }
        if(isset($_POST['instituicao'])){
            $instituicao = $_POST['instituicao'];
            $filtros['instituicao'] = $instituicao;
        }
        if(isset($_POST['cargo'])){
            $cargo = $_POST['cargo'];
            $filtros['cargo'] = $cargo;
        }
        if(isset($_POST['area_formacao'])){
            $area_formacao = $_POST['area_formacao'];
            $filtros['area_formacao'] = $area_formacao;
        }
        if(isset($_POST['area_atuacao'])){
            $area_atuacao = $_POST['area_atuacao'];
            $filtros['area_atuacao'] = $area_atuacao;
        }
        if(!empty($_POST)){
            return $filtros;
        }

    }

}

?>