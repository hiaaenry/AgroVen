<?php


include_once 'conexao.php';

$id =$_GET ['del'];

$sql = "DELETE FROM ListaDeDesejos WHERE id_produto='$id'";
  // Verifica se o comando foi executado com sucesso
  
if (empty($id)) {
    echo "<script>window.location='ListaDeDesejos.php';alert('Produto Não encontrado.');</script>";
    
}

	$query_produto = "DELETE FROM lista_de_desejos WHERE id_produto =".$id;
	$delete_produto = $conectar->prepare($query_produto);
	$delete_produto->execute();

	if (($delete_produto) AND ($delete_produto->rowCount() !=0)) {
		$excluir = "DELETE FROM lista_de_desejos WHERE id_produto = $id";
		$apagar = $conectar->prepare($excluir);

		if ($apagar->execute()) {
			echo "<script>window.location='ListaDeDesejos.php';alert('Produto apagado com sucesso.');</script>";
		}else{
			echo "<script>window.location='ListaDeDesejos.php';alert('Produto Não apagado.');</script>";
		}

	}else{
		echo "<script>window.location='ListaDeDesejos.php.php';alert('Produto Não encontrado.');</script>";

	}

?>