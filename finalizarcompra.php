<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Finalizar compra</title>
  </head>
  <body>
  <h1>Frete do Produto</h1>
  <?php
  if(isset($_SESSION['msg'])){ 
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  
  ?>
  <form method="POST" action="frete.php">
			<label>Rua: </label>
			<input class="container" type="text" name="rua" placeholder="Digite o nome da dua rua"><br><br>
			
			<label>Número: </label>
			<input class="container" type="number" name="numero" placeholder="Digite o número da sua casa ou apartamento"><br><br>

      <label>Complemento: </label>
			<input class="container" type="text" name="complemento" placeholder="Digite com exatidão a localização dos seu imóvel"><br><br>

      <label>Cidade: </label>
			<input class="container" type="text" name="cidade" placeholder="Digite o nome de sua cidade"><br><br>

      <label>Ponto de referencia: </label>
			<input class="container" type="text" name="ponto" placeholder="Digite um ponto de referencia"><br><br>
			
			<input class="container" name="SendCadCont" placeholder=""type="submit" value="Enviar">
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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- JavaScript-->
    <script>
      function calculo(){
        var cep = $("#cep").val();
        $.post('calcfrete.php',{cep:cep},function(data){
          $("#retorno").html(data);
        });
      }
    </script>

  </body>
</html>