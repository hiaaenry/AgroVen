<?php
session_start();
include_once 'conexao.php';

$compra = filter_input(INPUT_POST, 'compra', FILTER_SANITIZE_STRING);
if($compra){

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
    $imagem = filter_input(INPUT_POST, 'imagem', FILTER_SANITIZE_STRING);
    

    $update_banco = "UPDATE produto SET nome=:nome, descricao=:descricao, preco=:preco, imagem=:imagem WHERE id=$id";
    
    $updateCad = $conectar->prepare($update_banco);
    $updateCad->bindParam(':nome', $nome);
    $updateCad->bindParam(':descricao', $descricao);
    $updateCad->bindParam(':preco', $preco);
    $updateCad->bindParam(':imagem', $imagem);
    
    if($updateCad->execute()){
        $_SESSION['msg'] = "<p style='color:green;'> Produto editado com sucesso</p>";
        header("Location: index.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Produto não foi editado, tente novamente!</p>";
        header("Location: index.php");
    }    
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Produto não foi editado, tente novamente!</p>";
    header("Location: index.php");
}