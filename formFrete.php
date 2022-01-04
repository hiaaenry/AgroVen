<?php
session_start();
require "verifica.php";
?>

<head>
  <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
  <link href="geral.css" rel="stylesheet">
  <title>AgroVen</title>
</head>

<body>

  <div class="topnav">

    <div class="logo">
      <a href="indexCliente.php">
        <img src="imagem/logo.png" alt="AgroVen" width="100px">
      </a>
    </div>

    <a href="perfilCliente.php">
      <p class="fa fa-user">
        <?php
        echo ($_SESSION["CLI_NOME"]);
        ?>
      </p>
    </a>

  </div>

  <h1 style="padding: 2%;">
    <center>Frete do Produto</center>
  </h1>
  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }

  ?>
  <div class="tudo">
    <form method="POST" action="frete.php">
      <label>Rua: </label><br>
      <input class="container" type="text" name="rua" placeholder="Digite o nome da dua rua" required><br><br>

      <label>Número: </label><br>
      <input class="container" type="number" name="numero" placeholder="Digite o número da sua casa ou apartamento" required><br><br>

      <label>Complemento: </label><br>
      <input class="container" type="text" name="complemento" placeholder="Digite com exatidão a localização dos seu imóvel" required><br><br>

      <label>Cidade: </label><br>
      <input class="container" type="text" name="cidade" placeholder="Digite o nome de sua cidade" required><br><br>

      <label>Ponto de referencia: </label><br>
      <input class="container" type="text" name="ponto" placeholder="Digite um ponto de referencia" required><br><br>

      <input class="btn" name="SendCadCont" placeholder="" type="submit" value="Enviar">

    </form>
    <div style="height:50px;"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Digite Seu CEP</label>
            <input type="text" class="form-control" id="cep" placeholder="Seu cep">
            <small class="form-text text-muted"><a href="http://www.consultaenderecos.com.br/busca-endereco" target="_blank">Não sei meu CEP</a></small>
          </div>
          <button onclick="calculo();" class="btn btn-success">Calcular</button>
        </div>
        <div class="col-md-4" id="retorno">

        </div>
      </div>
    </div>

  </div>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <!-- JavaScript-->
  <script>
    function calculo() {
      var cep = $("#cep").val();
      $.post('frete.php', {
        cep: cep
      }, function(data) {
        $("#retorno").html(data);
      });
    }
  </script>

</body>

</html>

<style>
  a {
    text-decoration: none;
  }

  body {
    background-color: white;
  }

  .tudo {
    margin-left: 20%;
    margin-right: 20%;
    padding-bottom: 10%;
  }

  input[type="text"],
  [type="number"] {
    background-color: whitesmoke;
    width: 100%;
    padding: 15px 20px;
    margin: 8px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 5px;
  }

  .btn {
    border: 2px solid white;
    border-radius: 5px;
    background-color: #f5900c;
    padding: 14px 28px;
    margin: 1% 5% 5% 5%;
    font-size: 16px;
    cursor: pointer;
    float: left;
    width: 90%;
    color: white;
  }

  .btn:hover {
    border: 2px solid #f5900c;
  }
</style>