<?php

session_start();
require_once('conexao.php'); 
$consulta = conexao_banco()->prepare("SELECT nome_completo,cpf FROM dados ORDER BY nome_completo");
$consulta->execute();
$usuarios = $consulta->fetchall(PDO::FETCH_ASSOC);

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
        <h1>Usuarios cadastros</h1>

        <?php
    for ($i = 0; $i < $consulta->rowCount(); $i++) {
        $usuario = $usuarios[$i]; 
       
        ?>
        <form id="editar" action="5-alterardados.php" method="POST">
            <?php echo $usuario['cpf']; ?> - <?php echo $usuario['nome_completo']; ?>
            <input type="hidden" name="cpf" value="<?php echo $usuario['cpf']; ?>">
            <input type="submit" value="Editar">
        </form>
        <?php  }?>
    </center>


</body>

</html>