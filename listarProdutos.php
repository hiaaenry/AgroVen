<?php
include_once 'conexao.php';
?>

<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>AgroVen</title>
</head>

<body>
    <div class="topnav">

        <div class="logo">
            <a href="index.php">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </a>
        </div>

        <a href="formLogin.php">
            <p class="fa fa-user"> Login</p>
        </a>

    </div>

    <div class="tudo">

        <div class="listagem">
            <?php


            $exibir_banco = "SELECT * FROM AGR_PRODUTO ORDER BY PRO_ID ASC";

            $exibir = $conectar->prepare($exibir_banco);
            $exibir->execute();

            while ($row = $exibir->fetch(PDO::FETCH_ASSOC)) {
            ?>

                <div class="produto">
                    <div class="coluna1">
                        <img src="imagens/<?= $row['PRO_ID'] ?>/<?= $row['PRO_IMAGEM'] ?>" class="img">
                    </div>
                    <div class="coluna2">

                        <?php
                        echo "<p>Nome: " . $row['PRO_NOME'] . "</p>";
                        echo "<p>Descrição: " . $row['PRO_DESCRICAO'] . "</p>";
                        echo "<p>Preço: R$ " . $row['PRO_PRECO'] . "</p>";
                        echo "<a href='compra.php?idProduto=" . $row['PRO_ID'] . "'>Comprar</a><br>";
                        ?>
                        
                    </div>
                <?php
            }
                ?>
                </div>
        </div>
    </div>
</body>

<style>
    body {
        background-color: white;
    }

    input[type="text"] {
        width: 100%;
        padding: 15px 20px;
        margin: 8px 0px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
        background-color: whitesmoke;
    }

    .tudo {
        margin-left: 10%;
        margin-right: 10%;
    }

    .listagem {
        margin-top: 2%;
    }

    .coluna1 {
        float: left;
        background-color: whitesmoke;
        padding: 30px;
    }

    .coluna1 img {
        width: 200px;
        max-height: 150px;
    }

    .coluna2 {
        background-color: whitesmoke;
        padding: 30px;
    }

    button {
        border: 2px solid white;
        border-radius: 5px;
        background-color: #f5900c;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
        width: 30%;
        color: white;
    }

    button:hover {
        border: 2px solid #f5900c;
    }
</style>