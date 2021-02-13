<?php

session_start();

include_once ("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

#echo "Nome: $nome <br>";
#echo "Email: $email <br>";
#echo "Telefone: $telefone <br>";
#echo "Mensagem: $mensagem <br>";

$resul_cadastro = "INSERT INTO usuario (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')";
$resultado_cadastro = mysqli_query($conexao, $resul_cadastro);

if (mysqli_insert_id($conexao)) {
	$_SESSION['msg'] = "Cadastro realizado com sucesso";
	header("location: index.html");
}
	else{
	header("location: index.html");

}


?>
