<?php
include_once 'conexao.php';

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$busca = "SELECT * FROM AGR_COMPRA WHERE COM_PRO_ID = '$id'";

$stmt = $conectar->query($busca);

$result = $stmt->fetch();

if ($result == true) {
	echo "<script>window.location='meusProdutos.php';alert('Você não pode apagar! Este produto foi vendido!');</script>";
}

if (empty($id)) {
	echo "<script>window.location='listarProdutos.php';alert('Produto Não encontrado.');</script>";
}
$query_produto = "SELECT PRO_ID FROM AGR_PRODUTO where PRO_ID = $id LIMIT 1";
$delete_produto = $conectar->prepare($query_produto);
$delete_produto->execute();

if (($delete_produto) and ($delete_produto->rowCount() != 0)) {

	$excluir = "DELETE FROM AGR_PRODUTO WHERE PRO_ID = $id";
	$apagar = $conectar->prepare($excluir);

	if ($apagar->execute()) {
		echo "<script>window.location='meusProdutos.php';alert('Produto apagado com sucesso!');</script>";
	} else {
		echo "<script>window.location='meusProdutos.php';alert('Produto Não apagado!.');</script>";
	}
} else {
	echo "<script>window.location='meusProdutos.php';alert('Produto Não encontrado!.');</script>";
}

?>