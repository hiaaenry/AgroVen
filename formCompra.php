<?php

session_start();
require 'verifica.php';
include_once 'conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (sizeof($_SESSION['carrinho']) < 1) {
    echo "<script>window.location='listarProdutosLogado.php';alert('seu carrinho esta vazio');</script>";
};

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

            for ($i = 0; $i < sizeof($_SESSION['carrinho']); $i++) {
                $id = intval($_SESSION['carrinho'][$i]['id']);
                $busca = "SELECT * FROM AGR_PRODUTO WHERE PRO_ID = $id LIMIT 1";
                $exibir = $conectar->prepare($busca);
                $exibir->execute();
                $result = $exibir->fetch(PDO::FETCH_ASSOC);
            ?>
                <div class="produto">
                    <div class="coluna">
                        <img src="imagens/<?= $result['PRO_ID'] ?>/<?= $result['PRO_IMAGEM'] ?>" class="img">
                    </div>
                    <div class="coluna">
                        <?php
                        echo "Nome: " . $result['PRO_NOME'] . "<br>";

                        echo "Preço: " . $result['PRO_PRECO'] . "<br>";
                        echo "Quantidade: " . $_SESSION['carrinho'][$i]['qtd'] . "<br>";
                        ?>
                        <form action="alterarQuantidade.php" method="POST">
                            <input type="number" min="1" placeholder="Alterar Quantidade" name="quantidade"></input>
                            <input type="hidden" name="id" value='<?= $result["PRO_ID"] ?>'></input>
                            <input type="submit" name="Alterar"></input>
                        </form>
                        <?php
                        echo "<a href='retirarDoCarrinho.php?idProduto=" . $result['PRO_ID'] . "'><button>Remover</button></a>";
                        ?>
                    </div>
                <?php
            };
                ?>
                </div>
                <a href="compra.php">
                    <button type="submit">Finalizar Compra</button>
                </a>
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

    input[type="number"] {
        width: 96%;
        padding: 2%;
        margin: 1% 0% 1% 0%;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
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