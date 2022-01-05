<head>
	<script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
	<link href="geral.css" rel="stylesheet">
	<title>AgroVen</title>
</head>

<body>
	<div class="topnav">

		<div class="logo">
			<img src="imagem/logo.png" alt="AgroVen" width="100px">
		</div>

		<a href="formLogin.php">
			<p class="fa fa-user"> Login</p>
		</a>

	</div>


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

	<footer>
		<a href="https://github.com/Rayaninha/AgroVen.git" class="fa fa-github"></a>
		<a href="" class="fa fa-instagram"></a>
	</footer>

</body>

<style>
	body {
		background-image: url(imagem/fundo.png);
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		margin: 0px;
		padding: 0px;
	}

	button {
		border: 2px solid white;
		border-radius: 5px;
		background-color: white;
		padding: 14px 28px;
		font-size: 16px;
		float: left;
		width: 30%;
		margin: 2% 10% 1% 10%;
		box-shadow: 5px 5px 15px #000;
		color: #662113;
		cursor: pointer;
	}

	button:hover {
		opacity: 0.8;
	}

	.coluna {
		float: left;
		width: 40%;
		margin: 0px 5% 50px 5%;
	}

	.tabela:after {
		content: "";
		display: table;
		clear: both;
	}

	footer {
		position: absolute;
	}
</style>