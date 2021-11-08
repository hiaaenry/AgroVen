<script>

let logo = '/imagens/logo.png';
let cliente = '/imagens/cliente.png';
let agricultor = '/imagens/agricultor.png';
let fundo = '/imagens/fundo.png';

/* import topnav from './topnav.svelte'; */

var modal = document.getElementById('id01');

window.onclick = function (event) {
  if (event.target == modal) {
	modal.style.display = "none";
  }
}
</script>

<body>
	<topnav/>
	<script src="https://use.fontawesome.com/c1a45d17ac.js"></script>

		<div class="topnav">
	
		  <a onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;"
			class="fa fa-user-circle" aria-hidden="true"></a>
	
		  <a href="#numero" class="fa fa-phone" aria-hidden="true"></a>
	
		  <div class="logo">
			<img src={logo} alt="AgroVen" width="100px">
		  </div>
	
		</div>
	
		<div id="id01" class="modal">
	
		  <form class="modal-content animate" action="/action_page.php" method="post">
	
			<div class="imgcontainer">
			  <span onclick="document.getElementById('id01').style.display='none'" class="close"
				title="Close Modal">&times;</span>
			</div>
	
			<div class="container" style="padding-top: 35px;">
	
			  <input type="email" placeholder="Digite seu e-mail" name="uname" required>
	
			  <input type="password" placeholder="Digite sua senha" name="psw" required>
	
			  <button class="entrar" type="submit">Entrar</button>
	
			  <button class="google" type="submit">
				<a href="#" class="fa fa-google fa-fw"></a>Entre com o google
			  </button>
	
			  <a href="registro.html">Não tem uma conta?</a>
	
			</div>
		  </form>
		</div>
	
		<button class="btn buscar">Busque por produtos</button>
		<button class="btn anunciar">Anuncie seus produtos</button>
	
		<div class="tabela">
	
		  <div class="coluna">
			<img src="imagens/cliente.png" alt="cliente" width="100%">
		  </div>
	
		  <div class="coluna">
			<img src="imagens/agricultor.png" alt="agricultor" width="100%">
		  </div>
	
		</div>

	</body>

<style>
	 a {
    text-decoration: none;
  }

  body {
    background-image: url(/imagens/fundo.png);
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
    border-radius: 25px;
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
    opacity: 0.9;
  }

  .tabela:after {
    content: "";
    display: table;
    clear: both;
  }

  input[type=email],
  input[type=password] {
    width: 100%;
    padding: 15px 20px;
    margin: 8px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  .google {
    background-color: white;
    color: black;
    padding: 14px 20px;
    margin: 8px 0px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    width: 100%;
    box-shadow: 2px 2px 10px black;
  }

  .google:hover {
    opacity: 0.8;
    cursor: pointer;
  }

  .entrar {
    background-color: #662113;
    color: white;
    padding: 14px 20px;
    margin: 8px 0px;
    border: none;
    cursor: pointer;
    width: 100%;
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
    height: 50%;
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
    animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
    from {
      -webkit-transform: scale(0)
    }

    to {
      -webkit-transform: scale(1)
    }
  }

  @keyframes animatezoom {
    from {
      transform: scale(0)
    }

    to {
      transform: scale(1)
    }
  }
</style>