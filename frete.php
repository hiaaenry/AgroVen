<?php

include 'conexao.php';

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$pont_ref = $_POST['ponto'];

$stmt = $conectar->prepare("INSERT INTO finalizar_compra(rua,numero,complemento,cidade,pont_ref) VALUES(?,?,?,?,?)");
$stmt->execute([$rua,$numero,$complemento,$cidade,$pont_ref]);

//header("Location:index.php");

echo "<script>window.location='finalizarcompra.php';alert('Cadastro do envio do frete realizado com sucesso!');</script>"

?>

