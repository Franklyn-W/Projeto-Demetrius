<?
function retornarUsuarios(){
$consulta = conexao_banco()->prepare("SELECT * from usuarios"); // criar view de retorno do nome_completo dos usuarios
$consulta->execute();
$listaUsuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);
for ($i=0; $i < $consulta->rowCount(); $i++) { 
     $usuario = $listaUsuarios[$i];
     echo 'Nome: '.$usuario.['nome_completo'];
     echo 'CPF:: '.$usuario.['cpf'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Usuarios Cadastrados</title>
</head>
<body>
<center>
    <h1></h1>
	<?php

	for ($i = 0; $i < $consulta->rowCount(); $i++) {
		$usuario = $usuarios[$i];
		echo $usuario['cpf']?> - <?php echo $usuario['nome_completo']; ?><br>
	<?php	} 	?>
</center>
</body>
</html>