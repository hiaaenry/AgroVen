<head>
	<link href="geral.css" rel="stylesheet">
</head>

<?php
session_start();
include_once "conexao.php";

$nome = $_POST['CLI_NOME'];
$email = $_POST['CLI_EMAIL'];
$senha = $_POST['CLI_SENHA'];
$rua = $_POST['CLI_END_RUA'];
$numero = $_POST['CLI_END_NUMERO'];
$cidade = $_POST['CLI_END_CIDADE'];
$cep = $_POST['CLI_END_CEP'];

$inserir = "SELECT * FROM AGR_CLIENTES WHERE CLI_EMAIL = '$email'";
$stmt = $conectar->query($inserir);

if ($stmt->fetch() !== false) {
	$_SESSION['erro'] = "<p class='fa fa-exclamation-triangle'> Usuário já cadastrado<p/>";
	$_SESSION['erroEmail'] = $email;
	header('location: formCliente.php');
	exit();
} else {
	$inserir = "INSERT INTO 
	AGR_CLIENTES (CLI_NOME, CLI_EMAIL, CLI_SENHA, CLI_END_RUA, CLI_END_NUMERO, CLI_END_CIDADE, CLI_END_CEP)
	VALUES('$nome', '$email', '$senha', '$rua', '$numero', '$cidade', '$cep')";

	$conectar->exec($inserir);

	header('location: formLogin.php');
}
