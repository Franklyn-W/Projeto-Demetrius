<?php


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

        <form id="cadastro" action="inserirusuario.php" method="POST">
            Usuario: <input type="text" name="usuario" id="usuario"><br><br>
            Senha: <input type="password" name="senha" id="senha"><br><br>
            Nome Completo: <input type="text" name="nomecompleto" id="nomecompleto"><br><br>
            Data de Nascimento: <input type="date" name="datanascimento" id="datanascimento"><br><br>
            CPF: <input type="text" name="cpf" id="cpf"><br><br><br>

            CEP: <input type="text" name="cep" id="cep"><br><br>
            RUA: <input type="text" name="rua" id="rua"><br><br>
            Numero: <input type="text" name="numerocasa" id="numerocasa"><br><br>
            Bairro: <input type="text" name="bairro" id="bairro"><br><br>
            Cidade: <input type="text" name="cidade" id="cidade">
            
            <input type="submit" name="cadastrar" value="Cadastrar usuario">
        </form><br>

    </center>
</body>

</html>