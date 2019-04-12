<?php

include 'vendor/autoload.php';

class User{

    public static function cadastrar(){

        $query = Query::config();

        if(isset($_POST['nome'])){

            $dados['nome'] = $_POST['nome'];
            $dados['user'] = $_POST['usuario'];
            $dados['email'] = $_POST['email'];
            $dados['password'] = $_POST['senha'];

            $query->insert('users', $dados);

        }

    }

    public static function login(){

        $query = Query::config();

        if(isset($_POST['usuario'])){

            $dados['user'] = $_POST['usuario'];
            $dados['password'] = $_POST['senha'];

            $resultado = $query->selectWhere('users',$dados);

            if(!empty($resultado)){
                session_start();
                $_SESSION['logado'] = 1;
                header('Location: painel');
            }else{
                ?>
                <script>
                alert("Usuário ou Senha Incorretos!");
                </script>
                <?php
            }
            
            return $resultado;

        }

    }

    public static function check(){

        session_start();

        if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== 1){

            echo 'você deve estar <a href="login">logado</a> para acessar o painel';
            die();
            session_destroy();
            exit;
            
        } 

    }

}

?>