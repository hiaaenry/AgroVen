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

		<a href="indexCliente.php">
			<div class="logo">
				<img src="imagem/logo.png" alt="AgroVen" width="100px">
			</div>
		</a>

		<a href="perfilCliente.php">
			<div class="link">
				<?php
				echo ($_SESSION["CLI_NOME"]);
				?>
			</div>
		</a>

		<a href="listarProdutosLogado.php">
			<div class="link"> Buscar Produtos</div>
		</a>

		<a href="comprovante.php">
			<div class="active"> Comprovante</div>
		</a>

		<a href="formCarrinho.php">
			<div class="fa fa-shopping-cart"> </div>
		</a>

		<a href="sair.php">
			<div class="fa fa-sign-out"> </div>
		</a>

	</div>
	<h1>Comprovante de Venda</h1>

	<div class="tudo">

		<table class="tabela">
			<tr>
				<th>PRODUTO</th>
				<th>PREÇO</th>
				<th>QUANTIDADE</th>
				<th>SUBTOTAL</th>
				<th>FRETE</th>
				<th>TOTAL</th>
			</tr>
			<tr>
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
					echo "<td>" .  $row['PRO_NOME'] . "</td>";
					echo "<td>R$" .  $row['PRO_PRECO'] . "</td>";
					echo "<td>" . $row['CPP_QTD_PRO'] . "</td>";

					$subtotal = $row['PRO_PRECO'] * $row['CPP_QTD_PRO'];

					echo "<td>R$" . $subtotal . "</td>";

					$count = $count + $row['CPP_PRECO_PRO_QTD'];

					$frete = 10;
					if ($subtotal > 100) {
						$frete = 0;
					}

					echo "<td>R$" . $frete . "</td>";

					$total = $subtotal + $frete;

					echo "<td>R$" . $total . "</td>";

				?>
			</tr>
		<?php
				}
		?>
		<div class="geral">
			<?php
			echo "Total da Compra: R$" . $count . "<br>";
			echo "Cliente: " . $cliente . "<br>";
			?>
		</div>
		</table>
	</div>
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
		background-image: url(imagem/comprovante.png);
		background-position: center;
		background-repeat: no-repeat;
		background-size: contain;
	}

	body h1 {
		margin: 1% 0% 1% 10%;
	}

	.fa-sign-out {
		position: absolute;
		right: 5%;
	}

	.tudo {
		margin: 0% 10% 5% 10%;
		min-height: 50%;
	}

	.tabela {
		width: 100%;
		text-align: center;
		font-size: 18;
	}

	.tabela td {
		background-color: whitesmoke;
		padding: 1%;
		border: 1px solid whitesmoke;
		border-radius: 5px;
	}

	.geral {
		background-color: #FFBD59;
		width: 20%;
		padding: 1%;
		border: 1px solid #FFBD59;
		border-radius: 5px;
		margin: 1% 0% 2% 0%;
		font-size: 20;
	}