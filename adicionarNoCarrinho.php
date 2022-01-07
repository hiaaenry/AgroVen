<?php
session_start();
include_once 'conexao.php';

$idProduto = $_GET['idProduto'];
$produto = [];

$sql = "SELECT * FROM AGR_PRODUTO WHERE PRO_ID = $idProduto";

$stmt = $conectar->query($sql);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

for ($j = 0; $j < sizeof($_SESSION['carrinho']); $j++) {
	if ($_SESSION['carrinho'][$j]['id'] == $idProduto) {
		echo "<script>window.location='listarProdutosLogado.php';alert('o produto já foi adicionado ao carrinho');</script>";
		exit;
	}
}
for ($i = 0; $i < 1; $i++) {
	$produto["id"] = intval($result["PRO_ID"]);
	$produto["qtd"] = 1;
};

array_push($_SESSION["carrinho"], $produto);
echo "<script>window.location='listarProdutosLogado.php';alert('o produto foi adicionado ao carrinho');</script>";
