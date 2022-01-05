<?php

session_start();
include_once 'conexao.php';

$cadastrar = filter_input(INPUT_POST, 'cadastrar', FILTER_SANITIZE_STRING);
if ($cadastrar) {

    $vendedor = $_SESSION['VEN_ID'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
    $nome_imagem = $_FILES['imagem']['name'];


    $inserir_banco = "INSERT INTO AGR_PRODUTO (PRO_VEN_ID, PRO_NOME, PRO_DESCRICAO, PRO_PRECO, PRO_IMAGEM) VALUES (:vendedor, :nome, :descricao, :preco, :imagem)";
    $inserir = $conectar->prepare($inserir_banco);
    $inserir->bindParam(':vendedor', $vendedor);
    $inserir->bindParam(':nome', $nome);
    $inserir->bindParam(':descricao', $descricao);
    $inserir->bindParam(':preco', $preco);

    $inserir->bindParam(':imagem', $nome_imagem);

    if ($inserir->execute()) {

        $ultimo_id = $conectar->lastInsertId();

        $diretorio = 'imagens/' . $ultimo_id . '/';

        mkdir($diretorio, 0755);

        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $nome_imagem)) {
            echo "<script>window.location='indexVendedor.php';alert('Cadastro do produto realizado com sucesso!');</script>";
        } else {
            echo "<script>window.location='formProduto.php';alert('Erro ao cadastrar o produto, tente novamente!');</script>";
        }
    } else {
        echo "<script>window.location='formProduto.php';alert('Erro ao cadastrar o produto!');</script>";
    }
} else {
    echo "<script>window.location='formProduto.php';alert('Erro ao salvar os dados!');</script>";
}

session_start();
$_SESSION['auth'] = true;
