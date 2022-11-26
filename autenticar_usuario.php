<?php

require_once('conexao_banco.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$select = "SELECT * FROM view_autenticar_usuario WHERE usuario = '$usuario' and senha = '$senha'";
$execQuery = pg_exec($conexao, $select);
$quebrarLinhas = pg_fetch_row($execQuery);

if ($usuario == $quebrarLinhas[0] && $senha == $quebrarLinhas[1]) {
    session_start(); // Inicia a sessao do usuario
    $_SESSION['usuario'] = $quebrarLinhas[0]; //Cria variavel global da sessao com o nome do usuario
    header('location: inicio.php');
}
else {
    header('location: naolocalizado.php');
}
?>