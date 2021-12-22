<?php

session_start();
include_once 'conexao.php';

$cadastrar = filter_input(INPUT_POST, 'cadastrar', FILTER_SANITIZE_STRING);
if ($cadastrar) {

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
    $nome_imagem = $_FILES['imagem']['name'];

   
    $inserir_banco = "INSERT INTO AGR_PRODUTO (PRO_NOME, PRO_DESCRICAO, PRO_PRECO, PRO_IMAGEM, USER_ID) VALUES (:nome, :descricao, :preco, :imagem, :userid)";
    $inserir = $conectar->prepare($inserir_banco);
    $inserir->bindParam(':nome', $nome);
    $inserir->bindParam(':descricao', $descricao);
    $inserir->bindParam(':preco', $preco);
    $inserir->bindParam(':userid', $_SESSION['USER_ID']);

    $inserir->bindParam(':imagem', $nome_imagem);

    if ($inserir->execute()) {

        $ultimo_id = $conectar->lastInsertId();

        $diretorio = 'imagens/' . $ultimo_id.'/';

        mkdir($diretorio, 0755);
        
        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$nome_imagem)){
            $_SESSION['msg'] = "<p style='color:green;'>Cadastro do produto realizado com sucesso!</p>";
            header("Location: index.php");
        }else{
            $_SESSION['msg'] = "<p><span style='color:red;'>Erro ao cadastrar o produto, tente novamente!</span></p>";
            header("Location: index.php");
        }        
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao cadastrar produto.</p>";
        header("Location: index.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
    header("Location: index.php");
}