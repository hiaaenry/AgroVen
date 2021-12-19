<?php
	include_once "conexao.php";

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$inserir ="SELECT * FROM AGR_CLIENTES WHERE CLI_EMAIL = '$email'";
	$stmt = $conectar->query($inserir);

	if ($stmt->fetch() !==false) {
		echo "<script>window.location='registrocliente.php';alert('Cadastro já existe!');</script>";
	} else {
		$inserir = "INSERT INTO AGR_CLIENTES (CLI_NOME, CLI_EMAIL, CLI_SENHA) VALUES('$nome', '$email', '$senha')";

		$conectar->exec($inserir);

		echo "<script>window.location='registrocliente.php';alert('Cadastro realizado com sucesso!');</script>";
	}
?>
