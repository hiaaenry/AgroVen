<?php

include_once 'conexao.php';
require 'verifica.php';

$busca = "SELECT * FROM AGR_COMPRA WHERE COM_PRO_ID = '$produto'";

$stmt = $conectar->query($busca);

$result = $stmt->fetch();
if ($result == false) {

    $sql = 'INSERT INTO AGR_LISTA_DE_DESEJOS(LIS_PRO_ID) VALUES(' . $_GET['idProduto'] . ')';

    $count = $conectar->exec($sql);
    echo ' <script>  window.location.href="listarListaDeDesejos.php";    </script>  ';
}

echo "<script>window.location='listarProdutosLogado.php';alert('Este produto já está na sua Lista de Desejos!');</script>";
