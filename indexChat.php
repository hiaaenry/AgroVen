<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000);

 
	</script>
</head>
<body onload="ajax();">
	<div id="chat">

		
	</div>
	<form method="post" action="indexChat.php" >
		<input type="text" name="nome" placeholder="Insere o seu nome: ">
		<input type="text" name="msg" placeholder="mensagem">
		<input type="submit" value="Enviar">
		
	</form>
	<?php
		include_once("conexao.php");
		$nome = $_POST['nome'];
		$mensagem = $_POST['msg'];
		$sql = $conectar->query("INSERT INTO agr_chat SET NOME = '$nome', MSG= '$mensagem'");


	?>

</body>
</html>s