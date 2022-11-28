<?php

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

$insertusuario = "INSERT INTO dados (
	nome_completo, cpf, dt_nasc, rua, numero, complemento, bairro, usuario, senha)
	VALUES ('$nome', '$cpf', '$dt_nasc', '$rua', '$numero', '$complemento', '$bairro', '$usuario', '$senha')";
$queryusuario = pg_exec($conexao, $insertusuario);

header("location: 4-listar_usuarios.php");

?>