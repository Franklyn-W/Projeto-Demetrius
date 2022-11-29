<?php

require_once('conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$select = "SELECT * FROM view_autenticar WHERE credencial = '$usuario' AND senha = '$senha'";
$execQuery = pg_exec($conexao, $select);
$linhas = pg_fetch_row($execQuery);


if ($usuario == $linhas[0])
{
    session_start(); // Inicia a sessao do usuario
    $_SESSION['usuario'] = $linhas[0]; //Cria variavel global da sessao com o nome do usuario
    header('location: 2-inicio.php');
}
else 
{
    header('location: 6-naolocalizado.php');
}
//?>