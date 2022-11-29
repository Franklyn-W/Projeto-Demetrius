<?php

require_once('conexao.php');
$cpf = $_POST['cpf'];

$lista_bairros = file_get_contents('http://enderecos.metheora.com/api/cidade/4964/bairros');
$json = json_decode($lista_bairros);

$select = "SELECT * FROM view_atualizar_usuario WHERE cpf = '$cpf'";
$query = pg_exec($conexao, $select);
$linha = pg_fetch_row($query);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <center>
        <h1>Tela de Cadastro/Edição de Usuarios</h1>

        <form id="cadastro" action="5-1queryupdate.php" method="POST">
            Nome : <input type="text" name="nome_completo" id="nome_completo" value="<?php echo $linha[0]?>"><br><br>
            CPF: <input type="text" name="cpf" id="cpf" value="<?php echo $linha[1]?>" readonly><br><br>
            Data de Nascimento: <input type="date" name="dt_nasc" id="dt_nasc" value="<?php echo $linha[2]?>"><br><br>

            Rua: <input type="text" name="rua" id="rua" value="<?php echo $linha[3]?>"><br><br>
            Numero: <input type="text" name="numerocasa" id="numerocasa" value="<?php echo $linha[4]?>"><br><br>
            Complemento: <input type="text" name="complemento" id="complemento" value="<?php echo $linha[5]?>"><br><br>
            Bairros <select name="bairro">
            <?php
            foreach($json as $bairro) {
            ?> <option value="<?php echo $bairro->Id; ?>"><?php echo $bairro->Nome;?></option> <?php } ?>
        </select> <br> <br>

            Usuario : <input type="text" name="usuario" id="usuario" value="<?php echo $linha[7]?>"><br><br>
            Senha: <input type="password" name="senha" id="senha" value="<?php echo $linha[8]?>"><br><br>

            <input type="submit" name="atualizar" value="Atualizar usuario">
            <a href="4-listar_usuarios.php"><button>Voltar para inicio</button></a>
        </form><br>

    </center>
</body>

</html>