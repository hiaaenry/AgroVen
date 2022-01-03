<?php 
include 'conexao.php';


$sql = ("SELECT PRO_NOME, PRO_PRECO, PRO_ID, CLI_NOME 
FROM AGR_PRODUTO 
INNER JOIN AGR_COMPRA 
ON AGR_PRODUTO.PRO_ID = AGR_COMPRA.COM_PRO_ID
INNER JOIN AGR_CLIENTES 
ON AGR_CLIENTES.CLI_ID = AGR_COMPRA.COM_CLI_ID");

/* $sql = ("SELECT PRO_NOME, PRO_PRECO, PRO_ID, CLI_NOME 
FROM AGR_PRODUTO 
INNER JOIN AGR_COMPRA 
ON AGR_PRODUTO.PRO_ID = AGR_COMPRA.COM_PRO_ID
INNER JOIN AGR_CLIENTES 
ON AGR_CLIENTES.CLI_ID = AGR_COMPRA.COM_CLI_ID
INNER JOIN AGR_VENDEDORES
ON AGR_VENDEDORES.VEN_ID = AGR_COMPRA.COM_VEN_ID") */

$result = $conectar->prepare($sql);
$result->execute();

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
	echo "Produto: " .  $row['PRO_NOME'] . "<br>";
	echo "Preço: " .  $row['PRO_PRECO'] . "<br>";
	echo "Cliente:" . $row['CLI_NOME'] . "<hr>";
	//echo "Vendedor:" . $row['VEN_NOME'] . "<br>";
}
	?>