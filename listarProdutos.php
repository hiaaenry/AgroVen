<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos</title>
    </head>
    <body>
        <h1>Todos os Produtos</h1>

        <?php

        $exibir_banco = "SELECT * FROM produto ORDER BY id ASC";

        $exibir = $conectar->prepare($exibir_banco);
        $exibir->execute();

        while ($row = $exibir->fetch(PDO::FETCH_ASSOC)) {
           
            echo "Nome: " . $row['nome'] . "<br>";
            echo "Descrição: " . $row['descricao'] . "<br>";
            echo "Preço: " . $row['preco'] . "<br>";
            echo "Imagem: " . $row['imagem'] . "<br><hr>";
            echo "<a href='cadEditar.php?id=".$row['id']."'>Editar</a><br><hr>";


        }
        ?>
    </body>
</html>
