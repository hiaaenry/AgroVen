<?php
session_start();
include_once 'conexao.php';

$id = $_GET['idProduto'];
$quantidade = $_POST['quantidade'];

$sql = "UPDATE AGR_COMPRA SET COM_QUANTIDADE='$quantidade' WHERE COM_ID='$id'";
$count = $conectar->exec($sql);

echo "<script>window.location='formFrete.php';alert('Ulala!');</script>";
