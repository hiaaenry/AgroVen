<?php
session_start();
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
			<a onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;" class="fa fa-user-circle" aria-hidden="true">

				<a href="" class="fa fa-phone" aria-hidden="true">
		</div>
		<div class="logo">
			<a href="bindex.php">
				<img src="imagem/logo.png" alt="AgroVen" width="100px" />
			</a>
		</div>
	</div>

	<div id="id01" class="modal">
		<form class="modal-content animate" action="/action_page.php" method="post">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>

			<div class="container" style="padding-top: 35px;">
				<!-- <img src="#" alt="fotoperfil"> -->

				<button class="entrar" onclick='sair()'> Sair </button>
			</div>
		</form>
	</div>

	<h1 style="text-align: center;">Qual será seu Anúncio?</h1>

	<div class="tabela">
	<form method="POST" action="produto.php" enctype="multipart/form-data">
			<div class="coluna">
				<h3>Sobre seu Produto</h3>
				<input type="text" name="nome" placeholder="Nome do Produto" required><br><br>
				<input type="text" name="descricao" placeholder="Descrição do Produto" required style="padding-bottom: 30%;"><br><br>
				<input type="text" name="preco" placeholder="Preço do Produto" required><br><br>
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
				<!-- <input type="file" name="imagem" required>
				<input type="file" name="imagem" required>
				<input type="file" name="imagem" required> -->

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
				<input type="submit" name="cadastrar" class="publicar" value="Anunciar Produto"><br>
				<a href="listarProdutos.php">Todos os produtos</a>
			</div>
		</form>
	</div>
</body>

<style>
	a {
		text-decoration: none;
	}

	body {
		background-color: #398646;
	}

	.topnav {
		background-color: #1d5e28;
		overflow: hidden;
		padding: 5px;
	}

	.logo {
		margin-left: auto;
		margin-right: auto;
		width: 6em;
	}

	.links a {
		float: right;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
	}

	.links :hover {
		background-color: #f5900c;
		color: #1d5e28;
		border-radius: 25px;
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

	input[type="text"] {
		width: 100%;
		padding: 15px 20px;
		margin: 8px 0px;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
		border-radius: 5px;
	}

	input[type="file"] {
		padding: 10% 0% 10% 0%;
		margin: 4px;
		background-color: #ccc;
		border-radius: 5px;
	}

	.entrar {
		background-color: #662113;
		color: white;
		padding: 14px 20px;
		margin: 8px 0px;
		border: none;
		cursor: pointer;
		width: 100%;
		border-radius: 5px;
	}

	.entrar:hover {
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
		width: 40%;
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

	.animate {
		-webkit-animation: animatezoom 0.6s;
		animation: animatezoom 0.6s;
	}

	@-webkit-keyframes animatezoom {
		from {
			-webkit-transform: scale(0);
		}

		to {
			-webkit-transform: scale(1);
		}
	}

	@keyframes animatezoom {
		from {
			transform: scale(0);
		}

		to {
			transform: scale(1);
		}
	}
</style>