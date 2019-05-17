<?php

include 'vendor/autoload.php';

class View{

    public static function load($file){

        include "views/{$file}.php";

    }

}

class Item{

    public static function delete(){

        $query = Query::config();

        if(isset($_POST['user'])){

            $usuario = $_POST['user'];
            $query->delete('que_users', 'id', $usuario);
            header("Location: usuarios");

        }

        if(isset($_POST['questao'])){

            $questao = $_POST['questao'];
            $query->delete('que_questoes', 'id', $questao);
            header("Location: questoes");

        }
        
        if(isset($_POST['filtro'])){

            $filtro = $_POST['filtro'];
            $query->delete('que_filtros', 'id', $filtro);
            header("Location: filtros");

        }

    }

    public static function rename(){

        $query = Query::config();

        if(isset($_POST['userValue'])){

            $userId = $_POST['user'];
            $userValue = $_POST['userValue'];
            $query->update('que_users', 'nome', $userValue, 'id', $userId);
            header("Location: usuarios");

        }

        if(isset($_POST['hierarquia'])){

            $userId = $_POST['user'];
            $hierarquia = $_POST['hierarquia'];
            $query->update('que_users', 'hierarquia', $hierarquia, 'id', $userId);
            header("Location: usuarios");

        }

        if(isset($_POST['questaoValue'])){

            $questaoId = $_POST['questao'];
            $questaoValue = $_POST['questaoValue'];
            $query->update('que_questoes', 'questao', $questaoValue, 'id', $questaoId);
            header("Location: questoes");

        }
        
        if(isset($_POST['filtroValue'])){

            $filtroId = $_POST['filtro'];
            $filtroValue = $_POST['filtroValue'];
            $query->update('que_filtros', 'valor', $filtroValue, 'id', $filtroId);
            header("Location: filtros");

        }        

    }

}

?>