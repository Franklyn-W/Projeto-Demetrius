<?php


$lista_bairros = file_get_contents('http://enderecos.metheora.com/api/cidade/4964/bairros');
$json = json_decode($lista_bairros);

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

        <form id="cadastro" action="3-1inserirusuario.php" method="POST">
            Nome : <input type="text" name="nome_completo" id="nome_completo"><br><br>
            CPF: <input type="text" name="cpf" id="cpf"><br><br>
            Data de Nascimento: <input type="date" name="dt_nasc" id="dt_nasc"><br><br>

            Rua: <input type="text" name="rua" id="rua"><br><br>
            Numero: <input type="text" name="numerocasa" id="numerocasa"><br><br>
            Complemento: <input type="text" name="complemento" id="complemento"><br><br>
            Bairros <select name="bairro">
            <?php
            foreach($json as $bairro) {
            ?> <option value="<?php echo $bairro->Id; ?>"><?php echo $bairro->Nome;?></option> <?php } ?>
        </select> <br> <br>

            Usuario : <input type="text" name="usuario" id="usuario"><br><br>
            Senha: <input type="password" name="senha" id="senha"><br><br>

            <input type="submit" name="cadastrar" value="Cadastrar usuario">
        </form><br>

    </center>
</body>

</html>