<?php 
session_start();

for ($i=0; $i < sizeof($_SESSION['carrinho']); $i++) { 
	if($_SESSION['carrinho'][$i]['id'] == intval($_POST['id'])){
		$_SESSION['carrinho'][$i]['qtd'] = intval($_POST['quantidade']);
	}
}

echo "<script>window.location='formCompra.php';alert('a quantidade foi alterada');</script>";

 ?>