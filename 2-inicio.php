<?php
session_start();
require_once('conexao.php');

$usuario = $_SESSION['usuario'];



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
                <a href="4-listar_usuarios.php">Usuarios Cadastrados</a>
                <a href="3-teladecadastro.php">Cadastrar Novo Usuario</a>
                <a href="6-logout.php">Sair</a>
            </nav>
        </center>
    </body>

    </html>