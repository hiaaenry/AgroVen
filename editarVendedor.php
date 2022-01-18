<?php
session_start();
include_once 'conexao.php';

$editar = filter_input(INPUT_POST, 'editar', FILTER_SANITIZE_STRING);
if ($editar) {

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $CEP = filter_input(INPUT_POST, 'CEP', FILTER_SANITIZE_STRING);
   


    $update_banco = ("UPDATE AGR_VENDEDORES SET VEN_NOME=:nome, VEN_EMAIL=:email, VEN_SENHA=:senha, VEN_END_RUA=:rua, VEN_END_NUMERO=:numero, VEN_END_CIDADE=:cidade, VEN_END_CEP=:CEP, WHERE VEN_ID='$id'");

    $updateCad = $conectar->prepare($update_banco);
    $updateCad->bindParam(':nome', $nome);
    $updateCad->bindParam(':emial', $email);
    $updateCad->bindParam(':senha', $senha);
    $updateCad->bindParam(':rua', $rua);
    $updateCad->bindParam(':numero', $numero);
    $updateCad->bindParam(':cidade', $cidade);
    $updateCad->bindParam(':CEP', $CEP);
  

    if ($updateCad->execute()) {
        header("Location: perfilVendedor.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Perfil do vendedor não editado, tente novamente!</p>";
        header("Location: perfilVendedor.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Perfil do vendedor não editado, tente novamente!</p>";
    header("Location: perfilVendedor.php");
}
