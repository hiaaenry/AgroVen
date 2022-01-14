<?php
session_start();
include_once 'conexao.php';

$editar = filter_input(INPUT_POST, 'editar', FILTER_SANITIZE_STRING);
if ($editar) {

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
   


    $update_banco = ("UPDATE AGR_PRODUTO SET PRO_NOME=:nome, PRO_DESCRICAO=:descricao, PRO_PRECO=:preco WHERE PRO_ID='$id'");

    $updateCad = $conectar->prepare($update_banco);
    $updateCad->bindParam(':nome', $nome);
    $updateCad->bindParam(':descricao', $descricao);
    $updateCad->bindParam(':preco', $preco);
  

    if ($updateCad->execute()) {
        header("Location: meusProdutos.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Produto não foi editado, tente novamente!</p>";
        header("Location: meusProdutos.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Produto não foi editado, tente novamente!</p>";
    header("Location: meusProdutos.php");
}
