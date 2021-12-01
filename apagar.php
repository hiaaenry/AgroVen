<?php


include_once 'conexao.php';

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
    echo "<script>window.location='listarProdutos.php';alert('Produto Não encontrado.');</script>";

}
	$query_produto = "SELECT id FROM produto where id = $id LIMIT 1";
	$delete_produto = $conectar->prepare($query_produto);
	$delete_produto->execute();

	if (($delete_produto) AND ($delete_produto->rowCount() !=0)) {

		$excluir = "DELETE FROM produto WHERE id = $id";
		$apagar = $conectar->prepare($excluir);

		if ($apagar->execute()) {
			echo "<script>window.location='listarProdutos.php';alert('Produto apagado com sucesso.');</script>";
		}else{
			echo "<script>window.location='listarProdutos.php';alert('Produto Não apagado.');</script>";
		}

	}else{
		echo "<script>window.location='listarProdutos.php';alert('Produto Não encontrado.');</script>";

	}

?>