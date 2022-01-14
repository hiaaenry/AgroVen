<head>
	<link href="geral.css" rel="stylesheet">
</head>

<?php
session_start();
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
	$_SESSION['erro'] = "<p class='fa fa-exclamation-triangle'> Usuário já cadastrado<p/>";
	$_SESSION['erroEmail'] = $email;
	header('location: formVendedor.php');
	exit();
} else {
	$inserir = "INSERT INTO 
	AGR_VENDEDORES (VEN_NOME, VEN_EMAIL, VEN_SENHA, VEN_END_RUA, VEN_END_NUMERO, VEN_END_CIDADE, VEN_END_CEP)
	VALUES('$nome', '$email', '$senha', '$rua', '$numero', '$cidade', '$cep')";

	$conectar->exec($inserir);

	header('location: formLogin.php');
}
