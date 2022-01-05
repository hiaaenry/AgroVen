<?php

include 'conexao.php';

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$pont_ref = $_POST['ponto'];

$stmt = $conectar->prepare("INSERT INTO AGR_FRETE(FRE_RUA, FRE_NUMERO, FRE_COMPLEMENTO, FRE_CIDADE, FRE_PONT_REF) VALUES('$rua','$numero','$complemento','$cidade','$pont_ref')");
$stmt->execute();

echo "<script>window.location='layout-chat.html';alert('Cadastro do envio do frete realizado com sucesso!');</script>";
