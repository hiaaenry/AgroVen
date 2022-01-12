<?php
session_start();
require 'verifica.php';
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

	<h1>BEM VINDO!</h1>

	<h2>QUE BOM QUE NOS ACHOU!</h2>
	<p>Do que você precisa? Comprar produtos de boa qualidade, com segurança,<br>
		de forma prática e rapida? Ou vender seu produto para todo o estado para<br>
		contribuir com o crecimento do agronegócio e valorizar microempresas?<br>
		Junte-se a nós efetuando seu cadastro em nosso site, com intuito melhorar a<br>
		prática da agricultura e da pecuária.</p>


	<h1>JUNTE-SE A NÓS!</h1>

	<a href="listarProdutos.php">
		<button>Busque por produtos</button>
	</a>

	<a href="formProduto.php">
		<button>Anuncie seus produtos</button>
	</a>

	<div class="tabela">

		<div class="coluna">
			<img src="imagem/cliente.png" alt="AgroVen" width="100%" />
		</div>

		<div class="coluna">
			<img src="imagem/agricultor.png" alt="AgroVen" width="100%" />
		</div>

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

<style>
	body {
		background-image: url(imagem/fundo.png);
		background-position: center;
		background-repeat: no-repeat;
		background-size: contain;
	}

	body h1,
	h2,
	p {
		margin: 2% 0% 2% 7%;
	}

	button {
		border: 2px solid white;
		border-radius: 100px;
		background-color: white;
		padding: 14px 28px;
		font-size: 16px;
		float: left;
		width: 30%;
		margin: 1% 10% 1% 10%;
		box-shadow: 5px 5px 15px #000;
		color: #662113;
		cursor: pointer;
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

	button:hover {
		opacity: 0.8;
	}

	.coluna {
		float: left;
		width: 36%;
		margin: 1% 7% 20% 7%;
	}

	.coluna img {
		box-shadow: 5px 5px 15px #000;
	}

	.tabela:after {
		content: "";
		display: table;
		clear: both;
	}
</style>