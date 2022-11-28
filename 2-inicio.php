<?php
session_start();
require_once('conexao_banco.php');

$login = $_SESSION['usuario'];

// cadastrar usuario

//listar usuarios
if(array_key_exists('ListarUsuarios', $_POST)) {
    header('listar_usuarios.php'); // identifica click no botao e chama a funcao
}



?>

<<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bem vindo!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <center>
            <h1>Bem vindo!</h1>
            <nav>
                <a href="teladecadastro.php"><button>Tela de Cadastro de Usuarios</button></a>
                <form method="post"><br>
                    <input type="submit" name="ListarUsuarios" class="button" value="Listar Usuarios" />
                </form>
            </nav>
        </center>
    </body>

    </html>