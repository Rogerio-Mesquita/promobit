<?php

$dbserver = "appweb.cxbsxod66t0i.us-east-1.rds.amazonaws.com";
$dbname = "appweb";
$dbuser = "appweb";
$dbsenha = "Gavioes10";

$conexao = mysqli_connect($dbserver, $dbuser, $dbsenha, $dbname) or die ("Erro na conexão");
if (!$conexao) {
    die ("A conexão falhou: " . mysqli_connect_error());
}

?>
