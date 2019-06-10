<?php

use App\Model\Email;

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
            //$dados['Area_Atuacao'] = $_POST['Area_Atuacao'];
            //$dados['dificuldade'] = $_POST['dificuldade'];

            $query->insert('que_questoes', $dados);

        }

    }

    public static function atualizar()
    {
        $query = Query::config();
        $query->atualizar('que_questoes',[
            'questao' => $_POST['questao'],
            'tags' => $_POST['tags'],
            'a' => $_POST['a'],
            'b' => $_POST['b'],
            'c' => $_POST['c'],
            'd' => $_POST['d'],
            'e' => $_POST['e'],
            'resposta' => $_POST['resposta'],
            'certoErrado' => $_POST['certoErrado'],
            'disciplina' => $_POST['disciplina'],
            'assunto' => $_POST['assunto'],
            'banca' => $_POST['banca'],
            'instituicao' => $_POST['instituicao'],
            'ano' => $_POST['ano'],
            'cargo' => $_POST['cargo'],
            'nivel' => $_POST['nivel'],
            // 'area_atuacao' => $_POST['area_atuacao'],
            'area_formacao' => $_POST['area_formacao'],
            //'dificuldade' => $_POST['dificuldade']
        ],[
            'id' => $_POST['id']
        ]);

        header('Location: questoes');
    }

    public static function filtrar($campos){

        $query = Query::config();
        $resultado = $query->selectWhereFiltro('que_questoes',$campos);
        return $resultado;

    }

    public static function reportar()
    {
        $query = Query::config();

        $query->inserir('que_erros',[

            'autor' => $_POST['nome'],
            'email' => $_POST['email'],
            'titulo' => $_POST['titulo'],
            'categoria' => $_POST['categoria'],
            'mensagem' => $_POST['mensagem'],
            'questaoId' => $_POST['questaoId']

        ]);

        Email::enviar('noreply@concursarcoaching.com.br','concursar.coaching@gmail.com',[
            'assunto' => $_POST['titulo'],
            'mensagem' => 'O usuário '.$_POST['nome'].' informou o seguinte erro: '.$_POST['mensagem']
        ]);

        include 'views/reportar-sucesso.php';
    }

}

?>