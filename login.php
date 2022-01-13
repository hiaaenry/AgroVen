<head>
	<link href="geral.css" rel="stylesheet">
</head>

<?php
session_start();
include_once "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];


$login = "SELECT * FROM AGR_VENDEDORES WHERE VEN_EMAIL = '$email' AND VEN_SENHA = '$senha'";

$stmt = $conectar->query($login);

$result = $stmt->fetch();

if ($result == false) {

	$login = "SELECT * FROM AGR_CLIENTES WHERE CLI_EMAIL = '$email' AND CLI_SENHA = '$senha'";

	$stmt = $conectar->query($login);

	$result = $stmt->fetch();

	if ($result == false) {
		$_SESSION['erro'] = "<p class='fa fa-exclamation-triangle'> Usuário não encontrado<p/>";
		exit();
	}
	session_start();
	$_SESSION['auth'] = true;
	$_SESSION['CLI_ID'] = $result['CLI_ID'];
	$_SESSION['CLI_NOME'] = $result['CLI_NOME'];
	$_SESSION['CLI_EMAIL'] = $result['CLI_EMAIL'];
	$_SESSION['carrinho'] = [];

	header('location: indexCliente.php');
}

session_start();
$_SESSION['auth'] = true;
$_SESSION['VEN_ID'] = $result['VEN_ID'];
$_SESSION['VEN_NOME'] = $result['VEN_NOME'];
$_SESSION['VEN_EMAIL'] = $result['VEN_EMAIL'];

header('location: indexVendedor.php');
