<?php 

include_once 'conexao.php';
$sql = 'INSERT INTO AGR_COMPRA(COM_PRO_ID, COM_VEN_ID, COM_CLI_ID) VALUES('.$_GET['idProduto'].', '.$_GET['idVendedor'].' , '.$_GET['idCliente'].' )';

$count = $conectar->exec($sql);
echo ' <script>  window.location.href="compra.php";    </script>  ';

?>