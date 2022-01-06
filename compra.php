<?php
session_start();
include_once 'conexao.php';
require 'verifica.php';
$idCliente = $_SESSION['CLI_ID'];

$sql = "INSERT INTO AGR_COMPRA (COM_CLI_ID) VALUES ($idCliente)";
$result = $conectar->prepare($sql);
$result->execute();

$idCompra = $conectar->lastInsertId();

$conta_total = 0;

for ($i = 0; $i < sizeof($_SESSION['carrinho']); $i++) {
    $idprod = intval($_SESSION['carrinho'][$i]['id']);
    $qtdprod = intval($_SESSION['carrinho'][$i]['qtd']);
    $sql = "SELECT * FROM AGR_PRODUTO WHERE PRO_ID = $idprod LIMIT 1";
    $query = $conectar->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $preco_compra = intval($result['PRO_PRECO']) * $qtdprod;

    $conta_total = $conta_total + $preco_compra;

    $sql2 = "INSERT INTO AGR_COMPRA_PRODUTO (CPP_COM_ID, CPP_PRO_ID,CPP_QTD_PRO,CPP_PRECO_PRO_QTD) VALUES ($idCompra,$idprod,$qtdprod,$preco_compra)";
    $query = $conectar->prepare($sql2);
    $query->execute();
}


$sql3 = "UPDATE AGR_COMPRA SET COM_PRECO = $conta_total WHERE COM_ID = $idCompra";
$query = $conectar->prepare($sql3);
$query->execute();

$_SESSION['carrinho'] = [];

echo "<script>window.location='formFrete.php';alert('Compra arquivada, segue ao');</script>";
