<?php 
var_dump($_GET);

include_once 'conexao.php';
$sql = 'INSERT INTO `lista_de_desejos`(id_produto) VALUES('.$_GET['idProduto'].')';

$count = $conectar->exec($sql);
echo ' <script>  window.location.href="ListaDeDesejos.php";    </script>  ';
?>