<?php
include_once "conexao.php";


$email = $_POST['email'];
$senha = $_POST['senha'];


$login = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

$stmt = $conectar->query($login);


$result = $stmt->fetch();
if ($result == false) {

	echo "<script>window.location='index.php';alert('Email ou Senha Incorreto!');</script>";
	exit();
}

session_start();
$_SESSION['auth'] = true;
$_SESSION['id'] = $result['id'];
//$_SESSION['user_name'] = $result['nome'];



if(!isset($_SESSION['auth']) || $_SESSION['auth'] !==true){

	echo "<script>window.location='index.php';alert('Algo deu errado!');</script>";
	
}

echo "<script>window.location='index.php';alert('Olá, Seja Bem Vindo!');</script>";

?>
