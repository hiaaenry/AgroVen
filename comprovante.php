<?php 
session_start();
include 'conexao.php';
require 'verifica.php';
$idCliente = ($_SESSION['CLI_ID']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Comprovante</title>

	<link href="geral.css" rel="stylesheet">
</head>
<body>
	<h1>Comprovante de Venda</h1>



	<?php


	$sql = ("SELECT PRO_NOME, PRO_PRECO, PRO_ID, CPP_QTD_PRO, CPP_PRECO_PRO_QTD, CLI_NOME 
		FROM AGR_PRODUTO 
		INNER JOIN AGR_COMPRA_PRODUTO
		ON AGR_PRODUTO.PRO_ID = AGR_COMPRA_PRODUTO.CPP_PRO_ID
		INNER JOIN AGR_COMPRA 
		ON AGR_COMPRA.COM_ID = AGR_COMPRA_PRODUTO.CPP_COM_ID
		INNER JOIN AGR_CLIENTES
		ON AGR_CLIENTES.CLI_ID = AGR_COMPRA.COM_CLI_ID");



	$result = $conectar->prepare($sql);
	$result->execute();
	$count = 0;
	$cliente;

	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
		$cliente = $row['CLI_NOME'];
		echo "Produto: " .  $row['PRO_NOME'] . "<br>";
		echo "Preço: " .  $row['PRO_PRECO'] . "<br>";
		echo "Quantidade: " . $row['CPP_QTD_PRO'] . "<hr>";


		$count = $count + $row['CPP_PRECO_PRO_QTD'];

	//echo "Vendedor:" . $row['VEN_NOME'] . "<br>";
	}

	echo "Total da Compra: " . $count . "<br>";
	echo "Cliente: " . $cliente;
	?>

</body>
</html>