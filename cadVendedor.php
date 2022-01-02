<?php
include_once "conexao.php";

$VEN_NOME = $_POST['VEN_NOME'];
$VEN_EMAIL = $_POST['VEN_EMAIL'];
$VEN_SENHA = $_POST['VEN_SENHA'];

$inserir = "SELECT * FROM AGR_VENDEDORES WHERE VEN_EMAIL = '$VEN_EMAIL'";
$stmt = $conectar->query($inserir);

if ($stmt->fetch() !== false) {

	echo "<script>window.location='formVendedor.php';alert('Cadastro já existe!');</script>";
	
} else {
	$inserir = "INSERT INTO AGR_VENDEDORES (VEN_NOME, VEN_EMAIL, VEN_SENHA) VALUES('$VEN_NOME', '$VEN_EMAIL', '$VEN_SENHA')";

	$conectar->exec($inserir);

	echo "<script>window.location='formLogin.php';alert('Cadastro realizado com sucesso!');</script>";
}
