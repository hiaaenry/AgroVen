<?php
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
		echo "<script>window.location='index.php';alert('Email ou Senha Incorreto!');</script>";
		exit();
	}
	session_start();
	$_SESSION['auth'] = true;
	$_SESSION['id'] = $result['id'];


	if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {

		echo "<script>window.location='index.php';alert('Algo deu errado!');</script>";
	}

	echo "<script>window.location='indexLogadoCliente.php';alert('Olá, Seja Bem Vindo!');</script>";
}

session_start();
$_SESSION['auth'] = true;
$_SESSION['id'] = $result['id'];


if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {

	echo "<script>window.location='index.php';alert('Algo deu errado!');</script>";
}

echo "<script>window.location='indexLogadoAgricultor.php';alert('Olá, Seja Bem Vindo!');</script>";
