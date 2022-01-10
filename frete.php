<?php

session_start();
include 'conexao.php';

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$pont_ref = $_POST['ponto'];
$idCliente = $_SESSION['CLI_ID'];

$stmt = $conectar->prepare("INSERT INTO AGR_FRETE(FRE_RUA, FRE_NUMERO, FRE_COMPLEMENTO, FRE_CIDADE, FRE_PONT_REF, FRE_CLI_ID) VALUES('$rua','$numero','$complemento','$cidade','$pont_ref','$idCliente')");
$stmt->execute();

echo "<script>window.location='layout-chat.html';alert('Cadastro do envio do frete realizado com sucesso!');</script>";
