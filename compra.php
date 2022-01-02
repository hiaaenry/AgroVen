<?php
session_start();
include_once 'conexao.php';

$produto = $_GET['idProduto'];
$cliente = $_SESSION['CLI_ID'];

$busca = "SELECT * FROM AGR_COMPRA WHERE COM_PRO_ID = '$produto'";

$stmt = $conectar->query($busca);

$result = $stmt->fetch();
if ($result == false) {

    $sql = "INSERT INTO AGR_COMPRA(COM_PRO_ID, COM_CLI_ID) VALUES('$produto', '$cliente')";

    $count = $conectar->exec($sql);

    echo "<script>window.location='formCompra.php';alert('Ulala!');</script>";
};

echo "<script>window.location='listarProdutosLogado.php';alert('Este produto já está no seu carrinho!');</script>";