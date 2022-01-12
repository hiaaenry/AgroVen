<?php
session_start();
include 'conexao.php';
require 'verifica.php';
$idCliente = ($_SESSION['CLI_ID']);

?>

<head>
	<script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
	<link href="geral.css" rel="stylesheet">
	<title>AgroVen</title>
</head>

<body>
	<div class="topnav">

		<a>
			<div class="logo">
				<img src="imagem/logo.png" alt="AgroVen" width="100px">
			</div>
		</a>

		<a href="index.php">
			<div class="active"> Página Inicial</div>
		</a>

		<a href="perfilCliente.php">
			<p class="inicio">
				<?php
				echo ($_SESSION["CLI_NOME"]);
				?>
			</p>
		</a>

		<a href="formCompra.php">
			<p class="inicio">
				Carrinho
			</p>
		</a>

	</div>
	<h1>Comprovante de Venda</h1>



	<?php


	$sql = ("SELECT PRO_NOME, PRO_PRECO, PRO_ID, CPP_QTD_PRO, CPP_PRECO_PRO_QTD, CLI_NOME 
		FROM AGR_PRODUTO 
		INNER JOIN AGR_COMPRA_PRODUTO
		ON AGR_PRODUTO.PRO_ID = AGR_COMPRA_PRODUTO.CPP_PRO_ID
		INNER JOIN AGR_COMPRA 
		ON AGR_COMPRA.COM_ID = AGR_COMPRA_PRODUTO.CPP_COM_ID
		INNER JOIN AGR_CLIENTES
		ON AGR_CLIENTES.CLI_ID = AGR_COMPRA.COM_CLI_ID
		WHERE COM_CLI_ID = $idCliente");

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
	<div class="footer">
		<footer>
			<hr>
			<div class="ajuda">Ajuda e Contato</div>
			<div class="dica">Dicas de Segurança</div>
			<a href="https://github.com/Rayaninha/AgroVen.git" class="fa fa-github"></a>
			<a href="" class="fa fa-instagram"></a>
			<p><a href="">Sobre o Agroven</a>, <a href="">Termos de uso, Política de privacidade</a> e <a href="">Proteção à Propriedade Intelectual</a><br>
				© Bom Negócio Atividades de Internet Ltda. Avenida Duarte Coelho, 1654, Campina de Feira - 53605-030 - Igarassu, PE</p>
		</footer>
	</div>

</body>

</html>
<style>
	body {
		background-color: white;
	}

	.topnav div.active {
		background-color: white;
		color: #5c913b;
	}

	.active,
	.entrar,
	.inicio {
		float: left;
		color: white;
		font-size: 17px;
		padding: 2% 2% 2% 2%;
	}

	.active:hover,
	.entrar:hover,
	.inicio:hover {
		background-color: white;
		color: #5c913b;
		opacity: 0.8;
	}

	.tudo {
		margin-left: 20%;
		margin-right: 20%;
	}