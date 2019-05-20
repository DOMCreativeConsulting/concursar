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

            $query->insert('que_users', $dados);
            ?>
            <script>
            alert("Cadastrado com sucesso!");
            </script>
            <?php

            @header('Location: login');
            
        }

    }

    public static function buscar(){

        $query = Query::config();
        $resultado = $query->selectAll('que_users');
        return $resultado;

    }

    public static function login(){

        $query = Query::config();

        if(isset($_POST['usuario'])){

            $dados['user'] = $_POST['usuario'];
            $dados['password'] = $_POST['senha'];

            $resultado = $query->selectWhere('que_users',$dados);

            foreach($resultado as $dado){
                $nome = $dado->nome;
                $email = $dado->email;
                $hierarquia = $dado->hierarquia;
            }

            if(!empty($resultado)){
                $_SESSION['logado'] = 1;
                $_SESSION['user'] = $nome;
                $_SESSION['email'] = $email;
                $_SESSION['hierarquia'] = $hierarquia;
                header('Location: ./');
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

    public static function logout(){

        $_SESSION['logado'] = 0;
        session_destroy();
        header('Location: login');

    }

    public static function check($status = null){

        if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== 1){

            echo '<div class="aviso">Você deve estar <a href="login">logado</a> para acessar o painel</div>';
            die();
            session_destroy();
            exit;
            
        } 

        if($status == 'adminOnly'){

            if($_SESSION['hierarquia'] != 'admin'){

                echo '<div class="aviso">Você não tem permissao para acessar esta área!</div>';
                die();
                session_destroy();
                exit;

            }

        } 

    }

}

?>