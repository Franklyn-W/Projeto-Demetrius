<?php

$host = "localhost";
$dbname = "ProjetoDemetrius";
$port = "5432";
$user = "postgres";
$password = "Parna10!";

if(!@($conexao = pg_connect("host=$host dbname=$dbname port=$port user=$user password=$password"))) 
{
    print "Ops, nosso servidor nao esta cooperando no momento, vamos conversar com ele e ver qual sua reinvidação. Por favor, tente novente em outro momento :)";
    die;
}

function conexao_banco()
{
    global $user;
    global $password;
    $PDO = new PDO('pgslq:host=localhost; dbname=ProjetoDemetrius; port=5432; user=postgres; password=Parna10!')
    or die ('Conexao deu ruim');
    return $PDO;
}

?>