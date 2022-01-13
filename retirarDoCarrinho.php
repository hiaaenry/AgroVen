<?php 
session_start();
$idProduto = $_GET['idProduto'];

for ($i=0; $i < sizeof($_SESSION['carrinho']); $i++) { 
	if($_SESSION['carrinho'][$i]['id'] == $idProduto = $_GET['idProduto']){
		unset($_SESSION['carrinho'][$i]);
	}
}

header('location: formCarrinho.php');
