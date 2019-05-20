<?php

include 'vendor/autoload.php';

class Questao{

    public static function buscar(){

        $query = Query::config();
        $resultado = $query->selectAll('que_questoes');
        return $resultado;

    }

    public static function cadastrar(){

        $query = Query::config();

        if(isset($_POST['questao'])){

            $dados['questao'] = $_POST['questao'];
            $dados['a'] = $_POST['a'];
            $dados['b'] = $_POST['b'];
            $dados['c'] = $_POST['c'];
            $dados['d'] = $_POST['d'];
            $dados['e'] = $_POST['e'];
            $dados['resposta'] = $_POST['resposta'];
            $dados['certoErrado'] = $_POST['certoErrado'];
            $dados['tags'] = $_POST['tags'];
            $dados['modalidade'] = $_POST['modalidade'];
            $dados['disciplina'] = $_POST['disciplinas'];
            $dados['assunto'] = $_POST['assunto'];
            $dados['banca'] = $_POST['banca'];
            $dados['instituicao'] = $_POST['instituicao'];
            $dados['ano'] = $_POST['ano'];
            $dados['cargo'] = $_POST['cargo'];
            $dados['nivel'] = $_POST['nivel'];
            $dados['Area_Formacao'] = $_POST['Area_Formacao'];
            $dados['Area_Atuacao'] = $_POST['Area_Atuacao'];
            $dados['dificuldade'] = $_POST['dificuldade'];

            $query->insert('que_questoes', $dados);

        }

    }

    public static function filtrar($campos){

        $query = Query::config();
        $resultado = $query->selectWhereFiltro('que_questoes',$campos);
        return $resultado;

    }

}

?>