<?php
session_start();
require_once('conexao_banco.php');

$login = $_SESSION['login'];

// cadastrar usuario

//listar usuarios
if(array_key_exists('ListarUsuarios', $_POST)) {
    retornarUsuarios(); // identifica click no botao e chama a funcao
}

function retornarUsuarios(){
$consulta = conexao_banco()->prepare("SELECT * view"); // criar view de retorno do nome_completo dos usuarios
$consulta->execute();
$listaUsuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);
for ($i=0; $i < $consulta->rowCount(); $i++) { 
     $usuario = $listaUsuarios[$i];
     echo 'Nome: '.$usuario.['nome_completo'];
     echo 'Nome: '.$usuario.['matricula'];
    }
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