<?php
include("conexao.php");
$sql = $conectar->query("SELECT * FROM agr_chat");
foreach ($sql->fetchAll() as $key) {
	echo "<h3>" . $key['NOME'] . "</h3>";
	echo "<h5>" . $key['MSG'] . "</h5>";
}
