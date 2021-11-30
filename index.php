<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
  <title>AgroVen</title>
</head>

<script>
	var modal = document.getElementById("id01");

	window.onclick = function (event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	};
</script>

<body>
	<script src="https://use.fontawesome.com/c1a45d17ac.js"></script>

  <div class="topnav">

<a onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;" class="fa fa-user-circle" aria-hidden="true"></a>

<a href="" class="fa fa-phone" aria-hidden="true"></a>

<div class="logo">
  <img src="imagem/logo.png" alt="AgroVen" width="100px">
</div>

</div>

<div id="id01" class="modal">

  <form class="modal-content animate" action="login.php" method="POST">

  <!--   <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container"> --->

      <label for="uname"><b>E-mail</b></label>
      <input type="email" placeholder="Digite seu e-mail" name="email" required>

      <label for="psw"><b>Senha</b></label>
      <input type="password" placeholder="Digite sua senha" name="senha" required>

      <button name="cadastrar" class="entrar" type="submit">Entrar</button>
      <a href="registro.php">Não tem uma conta?</a>

   <!--  </div> -->
  </form>
</div>

	<button class="btn buscar">Busque por produtos</button>
	<a href="anuncio.php">
		<button class="btn anunciar">Anuncie seus produtos</button>
	</a>
	<div class="tabela">
		<div class="coluna">
			<img src="imagem/cliente.png" alt="AgroVen" width="100%" />
		</div>

		<div class="coluna">
			<img src="imagem/agricultor.png" alt="AgroVen" width="100%" />
		</div>
	</div>
</body>

</html>

<style>
	a {
		text-decoration: none;
	}

	body {
		background-image: url(imagem/fundo.png);
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
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

	.topnav a {
		float: right;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
	}

	.topnav a:hover {
		background-color: #f5900c;
		color: #1d5e28;
		border-radius: 25px;
	}

	.btn {
		border: 2px solid white;
		border-radius: 5px;
		background-color: white;
		padding: 14px 28px;
		font-size: 16px;
		cursor: pointer;
		float: left;
		width: 30%;
		margin: 20px 10% 20px 10%;
		box-shadow: 5px 5px 15px black;
		color: #662113;
	}

	.btn:hover {
		border: 2px solid #662113;
		background-color: #662113;
		color: white;
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

	input[type="email"],
	input[type="password"] {
		width: 100%;
		padding: 15px 20px;
		margin: 8px 0px;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 5px;
		box-sizing: border-box;
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

	.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
		position: relative;
	}

	.container {
		padding: 16px;
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
