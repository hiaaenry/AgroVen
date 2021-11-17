<?php 


try {
	

	$conectar = new PDO("mysql:host=localhost;dbname=agroven", 'root', ''); 


} catch (PDOException $e){


	echo ' Falha ao conectar com o banco de dados: ' . $e->getMessage();

}


?>