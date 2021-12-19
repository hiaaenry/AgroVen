<?php
include_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$inserir ="SELECT * FROM AGR_VENDEDORES WHERE VEN_EMAIL = '$email'";
$stmt = $conectar->query($inserir);

if ($stmt->fetch() !==false) {

	echo "<script>window.location='registro.php';alert('Cadastro já existe!');</script>";
}
else{
$inserir = "INSERT INTO AGR_VENDEDORES (VEN_NOME, VEN_EMAIL, VEN_SENHA) VALUES('$nome', '$email', '$senha')";

$conectar->exec($inserir);

echo "<script>window.location='index.php';alert('Cadastro realizado com sucesso!');</script>";}
?>

