<?php
session_start();
require "verifica.php";
?>

<body>

	<?php

	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}

	?>

	<script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
	<div class="topnav">
		<div class="links">
			<p onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;" class="fa fa-user-circle" aria-hidden="true">
		</div>
		<div class="logo">
			<a href="index.php">
				<img src="imagem/logo.png" alt="AgroVen" width="100px" />
			</a>
		</div>
	</div>

	<div id="id01" class="modal">
		<div class="modal-content">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
			<form action="sair.php" method="post">
				<div class="container" style="padding-top: 35px;">
					<button class="botao"><a href="sair.php">Sair</a></button>
				</div>
			</form>
		</div>
	</div>
	<h1 style="text-align: center;">Qual será seu Anúncio?</h1>

	<div class="tabela">
		<form method="POST" action="produto.php" enctype="multipart/form-data">
			<div class="coluna">
				<h3>Sobre seu Produto</h3>
				<input type="text" name="nome" placeholder="Nome do Produto" required><br><br>
				<input type="text" name="descricao" placeholder="Descrição do Produto" required style="padding-bottom: 20%;"><br><br>
				<h3>R$:</h3><input type="number" name="preco" placeholder="Preço do Produto R$:" required><br><br>
				<!-- <h3>Tipo do Produto</h3>
				<input type="radio" value="frutas" id="frutas" name="produto" />
				<label for="frutas">Frutas</label><br />
				<input type="radio" value="verduras" id="verduras" name="produto" />
				<label for="verduras">Verduras</label><br />
				<input type="radio" value="legumes" id="legumes" name="produto" />
				<label for="legumes">Legumes</label><br />
				<input type="radio" value="animais" id="animais" name="produto" />
				<label for="animais">Animais</label><br /> -->
			</div>
			<div class="coluna">
				<h3>Imagens da Produção</h3>
				<input type="file" name="imagem" required>

				<!-- <h3>Informações Opcionais</h3>

				<input type="checkbox" name="obs" id="numberp" />
				<label for="number">Ativar número de contato pessoal.</label><br />
				<input type="checkbox" name="obs" id="numberc" />
				<label for="number">Ativar número de contato coorporativo.</label><br />
				<input type="checkbox" name="obs" id="local" />
				<label for="number">Aceitar recebimento da retirada do produto no local!</label><br />
				<input type="checkbox" name="obs" id="localc" />
				<label for="number">Compartilhar localização</label><br />
				<br />
				<br /> -->
				<input type="submit" name="cadastrar" class="publicar" value="Anunciar Produto">
			</div>
		</form>
	</div>
</body>
<footer>
	<a class="fa fa-github"></a>
	<a class="fa fa-instagram"></a>
</footer>
<style>
	a {
		text-decoration: none;
	}

	body {
		background-color: white;
	}

	.topnav {
		background-color: #5c913b;
		overflow: hidden;
		padding: 5px;
	}

	.logo {
		margin-left: auto;
		margin-right: auto;
		width: 6em;
	}

	.topnav p {
		float: right;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
	}

	.topnav p:hover {
		background-color: #f5900c;
		color: #1d5e28;
		border-radius: 25px;
	}

	input[type="text"],
	input[type="number"] {
		width: 100%;
		padding: 15px 20px;
		margin: 8px 0px;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
		border-radius: 5px;
		background-color: whitesmoke;
	}

	.coluna {
		float: left;
		width: 46%;
		margin: 0px 2% 50px 2%;
	}

	.tabela:after {
		content: "";
		display: table;
		clear: both;
	}

	input[type="file"] {
		float: left;
		padding: 10% 10% 10% 10%;
		margin: 4px;
		border: 1px solid #ccc;
		box-sizing: border-box;
		border-radius: 5px;
		background-color: whitesmoke;
	}

	.botao {
		background-color: #662113;
		color: white;
		padding: 14px 20px;
		margin: 8px 0px;
		border: none;
		cursor: pointer;
		width: 100%;
		border-radius: 5px;
		text-decoration: none;
	}

	.botao:hover {
		opacity: 0.8;
		cursor: pointer;
	}

	.publicar {
		background-color: #662113;
		color: white;
		padding: 14px 20px;
		margin: 8px 0px;
		border: none;
		cursor: pointer;
		width: 50%;
		border-radius: 5px;
	}

	.publicar:hover {
		opacity: 0.8;
		cursor: pointer;
	}

	.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
		position: relative;
	}

	.container {
		padding: 16px;
		text-align: center;
	}

	.modal {
		display: none;
		position: fixed;
		z-index: 1;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto;
		background-color: rgb(0, 0, 0);
		background-color: rgba(0, 0, 0, 0.4);
		padding-top: 60px;
	}

	.modal-content {
		background-color: white;
		margin: 5% auto 15% auto;
		box-shadow: 5px 5px 15px black;
		width: 40%;
	}

	.close {
		position: absolute;
		right: 25px;
		top: 0;
		color: #000;
		font-size: 35px;
		font-weight: bold;
		cursor: pointer;
	}

	.close:hover,
	.close:focus {
		color: #f5900c;
		cursor: pointer;
	}

	footer {
		width: 100%;
		background-color: #662113;
		color: white;
		font-size: 30px;
		bottom: 0px;
		right: 0px;
		text-align: center;
	}

	footer a {
		padding: 30px 0px 30px 0px;
	}
</style>