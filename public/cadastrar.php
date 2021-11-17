<?php
include_once "conexao.php";

try {
	$email= filter_var($_POST['email']);
	$senha= filter_var($_POST['senha']);

	$inserir = $conectar->prepare("INSERT INTO usuarios (email, senha) VALUES (:email, :senha)");


	$inserir->bindParam(':email', $email);
	$inserir->bindParam(':senha', $senha);
	$inserir->execute();

	echo "<script>window.location='index.php';alert('Cadastro realizado com sucesso!');</script>";
	


}catch(PDOException $e){

	echo 'Erro:' . $e->getMessage();
}


?>

