<?php 

include_once 'conexao.php';
$sql = 'INSERT INTO AGR_LISTA_DE_DESEJOS(LIS_PRO_ID) VALUES('.$_GET['idProduto'].')';

$count = $conectar->exec($sql);
echo ' <script>  window.location.href="ListaDeDesejos.php";    </script>  ';

?>