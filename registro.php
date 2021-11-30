  <body>
  	<div class="tabela">
  		<div class="coluna">
  			<div class="logo">
			  <a href="/index.php">
  				<img src="imagem/logo2.png" alt="AgroVen" width="100%" />
			  </a>
  			</div>

  			<form action="cadastrar.php" method="POST">
          <input type="text" placeholder="Digite seu nome" name="nome" required />
  				<input type="email" placeholder="Digite seu e-mail" name="email" required />

  					<input type="password" placeholder="Digite sua senha" name="senha" required />

  							<button class="cadastrar" type="submit">Cadastrar-se</button>
  			</form>
  		</div>
  		<div class="coluna">
  			<div class="linha1">
  				<img src="imagem/1.png" alt="um" />
  				<h3>Registre-se e venda seus produtos online.</h3>
  			</div>
  			<div class="linha2">
  				<img src="imagem/2.png" alt="dois" />
  				<h3>Informe seus produtos por meio de texto, foto ou vídeo.</h3>
  			</div>
  			<div class="linha3">
  				<img src="imagem/3.png" alt="tres" />
  				<h3>
  					Fale diretamente com cliente pelo chat, para o acordo das entregas.
  				</h3>
  			</div>
  		</div>
  	</div>
  </body>

  <style>
  	body {
  		background-color: #398646;
  	}

  	.logo {
  		width: 35%;
  		margin-left: 32%;
  	}

  	button {
  		border: 2px solid #398646;
  		border-radius: 5px;
  		background-color: #f5900c;
  		padding: 14px 28px;
  		margin: 20px 35%;
  		font-size: 16px;
  		cursor: pointer;
  		float: left;
  		width: 30%;
  		color: white;
  	}

  	button:hover {
  		border: 2px solid #f5900c;
  	}

  	h3 {
  		color: #1d5e28;
  	}

  	.tabela:after {
  		content: "";
  		display: table;
  		clear: both;
  	}

  	.coluna {
  		float: left;
  		width: 46%;
  		height: 80%;
  		margin: 0px 2% 50px 2%;
  		padding-top: 5%;
  	}

  	.linha1 img {
  		float: left;
  		width: 20%;
  		margin-left: 15%;
  		margin-right: 5%;
  		margin-bottom: 20px;
  		border-radius: 50%;
  	}

  	.linha1 h3 {
  		width: 70%;
  		padding: 9%;
  		text-align: center;
  	}

  	.linha2 img {
  		float: left;
  		width: 20%;
  		margin-left: 15%;
  		margin-right: 5%;
  		margin-bottom: 20px;
  		border-radius: 50%;
  	}

  	.linha2 h3 {
  		width: 70%;
  		padding: 9%;
  		text-align: center;
  	}

  	.linha3 img {
  		float: left;
  		width: 20%;
  		margin-left: 15%;
  		margin-right: 5%;
  		margin-bottom: 20px;
  		border-radius: 50%;
  	}

  	.linha3 h3 {
  		width: 70%;
  		padding: 5%;
  		text-align: center;
  	}
    input[type="text"],
  	input[type="email"],
  	input[type="password"] {
  		width: 70%;
  		padding: 15px 20px;
  		margin: 8px 15%;
  		display: inline-block;
  		border: 2px solid white;
  		box-sizing: border-box;
  		border-radius: 5px;
  	}
  </style>