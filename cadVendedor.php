<?php
include_once "conexao.php";

$nome = $_POST['VEN_NOME'];
$email = $_POST['VEN_EMAIL'];
$senha = $_POST['VEN_SENHA'];
$rua = $_POST['VEN_END_RUA'];
$numero = $_POST['VEN_END_NUMERO'];
$complemento = $_POST['VEN_END_COMPLEMENTO'];
$cidade = $_POST['VEN_END_CIDADE'];
$referencia = $_POST['VEN_END_REF'];
$cep = $_POST['VEN_END_CEP'];

$inserir = "SELECT * FROM AGR_VENDEDORES WHERE VEN_EMAIL = '$email'";
$stmt = $conectar->query($inserir);

if ($stmt->fetch() !== false) {

	echo "<script>window.location='formVendedor.php';alert('Cadastro já existe!');</script>";
} else {
	$inserir = "INSERT INTO 
	AGR_VENDEDORES (VEN_NOME, VEN_EMAIL, VEN_SENHA, VEN_END_RUA, VEN_END_NUMERO, VEN_END_CIDADE, VEN_END_CEP)
	VALUES('$nome', '$email', '$senha', '$rua', '$numero', '$cidade', '$cep')";

	$conectar->exec($inserir);

	echo "<script>window.location='formLogin.php';alert('Cadastro realizado com sucesso!');</script>";
}
