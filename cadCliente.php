<?php
include_once "conexao.php";

$CLI_NOME = $_POST['CLI_NOME'];
$CLI_EMAIL = $_POST['CLI_EMAIL'];
$CLI_SENHA = $_POST['CLI_SENHA'];

$inserir = "SELECT * FROM AGR_CLIENTES WHERE CLI_EMAIL = '$CLI_EMAIL'";
$stmt = $conectar->query($inserir);

if ($stmt->fetch() !== false) {

	echo "<script>window.location='formCliente.php';alert('Cadastro já existe!');</script>";
	
} else {
	$inserir = "INSERT INTO AGR_CLIENTES (CLI_NOME, CLI_EMAIL, CLI_SENHA) VALUES('$CLI_NOME', '$CLI_EMAIL', '$CLI_SENHA')";

	$conectar->exec($inserir);

	echo "<script>window.location='formLogin.php';alert('Cadastro realizado com sucesso!');</script>";
}
