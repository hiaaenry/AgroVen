<?php
include_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$inserir ="SELECT * FROM usuarios WHERE email = '$email'";
$stmt = $conectar->query($inserir);

if ($stmt->fetch() !==false) {

	echo "<script>window.location='registro.php';alert('Cadastro já existe!');</script>";
}
else{
$inserir = "INSERT INTO usuarios (nome, email, senha) VALUES('$nome', '$email', '$senha')";

$conectar->exec($inserir);

echo "<script>window.location='registro.php';alert('Cadastro realizado com sucesso!');</script>";
}
?>

