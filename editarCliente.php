<?php
session_start();
include_once 'conexao.php';

$editar = filter_input(INPUT_POST, 'cadastrar', FILTER_SANITIZE_STRING);
if ($editar) {

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $CEP = filter_input(INPUT_POST, 'CEP', FILTER_SANITIZE_STRING);
   


    $update_banco = ("UPDATE AGR_CLIENTES SET CLI_NOME=:nome, CLI_EMAIL=:email, CLI_SENHA=:senha, CLI_END_RUA=:rua, CLI_END_NUMERO=:numero, CLI_END_CIDADE=:cidade, CLI_END_CEP=:CEP WHERE CLI_ID='$id'");

    $updateCad = $conectar->prepare($update_banco);
    $updateCad->bindParam(':nome', $nome);
    $updateCad->bindParam(':email', $email);
    $updateCad->bindParam(':senha', $senha);
    $updateCad->bindParam(':rua', $rua);
    $updateCad->bindParam(':numero', $numero);
    $updateCad->bindParam(':cidade', $cidade);
    $updateCad->bindParam(':CEP', $CEP);
  

    if ($updateCad->execute()) {
        header("Location: perfilCliente.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Perfil do cliente não editado, tente novamente!</p>";
        header("Location: perfilCliente.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Perfil do cliente não editado, tente novamente!</p>";
    header("Location: perfilCliente.php");
}
