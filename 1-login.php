<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela de login</title>
    </head>
    <body>
        <form action="autenticar_usuario.php" method="post">
            <div><center>
                <label>Usurio: </label><input type="text" name="usuario">
                <br>
                <label>Senha: </label><input type="password" name="senha">
                <br>
                <input type="submit" value="Acessar sistema" name="entrar">
            </center></div>
        </form>
    </body>
</html>