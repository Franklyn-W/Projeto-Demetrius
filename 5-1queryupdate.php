<?php
session_start();
require_once('conexao.php');

$nome = $_POST['nome_completo'];
$cpf = $_POST['cpf'];
$dt_nasc = $_POST['dt_nasc'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$atualizar = "UPDATE dados
	SET nome_completo='$nome', cpf='$cpf', dt_nasc='$dt_nasc', rua='$rua', numero='$numero', complemento='$complemento', bairro='$bairro', usuario='$usuario', senha='$senha'
	WHERE cpf = '$cpf'";
$queryusuario = pg_exec($conexao, $atualizar);

header("location: 4-listar_usuarios.php");

?>