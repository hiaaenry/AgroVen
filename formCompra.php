<?php

session_start();
require 'verifica.php';
include_once 'conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

?>

<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>AgroVen</title>
</head>

<body>

    <div class="topnav">

        <div class="logo">
            <a href="indexCliente.php">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </a>
        </div>

        <a href="perfilCliente.php">
            <p class="fa fa-user">
                <?php
                echo ($_SESSION["CLI_NOME"]);
                ?>
            </p>
        </a>

    </div>

    <div class="tudo">

        <div class="listagem">
            <?php


            $exibir_banco = "SELECT PRO_NOME, PRO_PRECO, PRO_ID
                 FROM AGR_COMPRA
                 INNER JOIN AGR_PRODUTO
                 ON AGR_COMPRA.COM_PRO_ID = AGR_PRODUTO.PRO_ID
                 ORDER BY PRO_ID ASC";
            $exibir = $conectar->prepare($exibir_banco);
            $exibir->execute();
            while ($row = $exibir->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="produto">
                <div class="coluna">
                        <img src="imagens/<?= $row['PRO_ID'] ?>/<?= $row['PRO_IMAGEM'] ?>" class="img">
                    </div>
                    <div class="coluna">
                        <?php
                        echo "Nome: " . $row['PRO_NOME'] . "<br>";

                        echo "Preço: " . $row['PRO_PRECO'] . "<br>";
                        ?>
                        <form action="quantidade.php" method="POST">
                            <input type="number" min="1" placeholder="Quantidade" name="quantidade">
                            <select>
                                <option value="Kg">Kg</option>
                                <option value="gramas">gramas</option>
                                <option value="Unidade">Unidade</option>
                                <option value="animal">Animal</option>
                            </select>

                            <?php
                            echo "<a href='quantidade.php?idProduto=" . $row['PRO_ID'] . "'><button>Compra</button></a>";
                            ?>
                            </input>
                        </form>
                    </div>
                <?php
            }
                ?>

                </div>
        </div>


    </div>
    </div>


</body>

<style>
    body {
        background-color: white;
    }

    .tudo {
        margin-left: 20%;
        margin-right: 20%;
    }

    input[type="text"],
    [type="number"] {
        width: 96%;
        padding: 2%;
        margin: 1% 2% 0% 2%;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
    }

    select {
        width: 96%;
        padding: 2%;
        margin: 1% 2% 0% 2%;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
        background-color: white;
    }

    .listagem {
        width: 100%;
        margin: 2% 0% 2% 0%;
        padding: 1%;
        border-radius: 5px;
        min-height: 100%;
    }

    .produto {
        background-color: whitesmoke;
        width: 100%;
        float: left;
    }

    .coluna {
        float: left;
        width: 30%;
        margin: 2%;
    }

    .coluna img {
        width: 200px;
    }

    button {
        border: 2px solid white;
        border-radius: 5px;
        background-color: #f5900c;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
        width: 50%;
        color: white;
        margin: 2% 25% 0% 25%;
    }

    button:hover {
        border: 2px solid #f5900c;
    }
</style>