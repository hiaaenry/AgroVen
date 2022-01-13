<?php
session_start();

include_once 'conexao.php';
require 'verifica.php';
?>

<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>AgroVen</title>
</head>

<body>
    <div class="topnav">

        <a href="indexCliente.php">
            <div class="logo">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </div>
        </a>

        <a href="indexCliente.php">
            <div class="link"> Página Inicial</div>
        </a>

        <a href="perfilCliente.php">
            <div class="link">
                <?php
                echo ($_SESSION["CLI_NOME"]);
                ?>
            </div>
        </a>

        <a href="listarProdutosLogado.php">
            <div class="active"> Buscar Produtos</div>
        </a>

        <a href="formCarrinho.php">
            <div class="fa fa-shopping-cart"> </div>
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

                <div class="coluna1">
                    <img src="imagens/<?= $row['PRO_ID'] ?>/<?= $row['PRO_IMAGEM'] ?>" class="img">
                </div>
                <div class="coluna2">

                    <?php
                    echo "<p>Nome: " . $row['PRO_NOME'] . "</p>";
                    echo "<p>Descrição: " . $row['PRO_DESCRICAO'] . "</p>";
                    echo "<p>Preço: R$ " . $row['PRO_PRECO'] . "</p>";
                    echo "<a href='adicionarNoCarrinho.php?idProduto=" . $row['PRO_ID'] . "'><button>Adicionar no Carrinho</button></a>";
                    ?>

                    <?php if (isset($_SESSION['add'])) {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                    ?>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
    <div class="footer">
        <footer>
            <hr>
            <div class="ajuda">Ajuda e Contato</div>
            <div class="dica">Dicas de Segurança</div>
            <a href="https://github.com/Rayaninha/AgroVen.git" class="fa fa-github"></a>
            <a href="" class="fa fa-instagram"></a>
            <p><a href="">Sobre o Agroven</a>, <a href="">Termos de uso, Política de privacidade</a> e <a href="">Proteção à Propriedade Intelectual</a><br>
                © Bom Negócio Atividades de Internet Ltda. Avenida Duarte Coelho, 1654, Campina de Feira - 53605-030 - Igarassu, PE</p>
        </footer>
    </div>
</body>

<style>
    body {
        background-color: white;
    }

    .tudo {
        margin: 5% 10% 5% 10%;
    }

    .listagem {
        border: 1px solid grey;
        border-radius: 5px;
    }

    .coluna1 {
        float: left;
        padding: 30px;
    }

    .coluna1 img {
        width: 200px;
        max-height: 150px;
    }

    .coluna2 {
        padding: 30px;
    }

    button {
        padding: 14px 28px;
        font-size: 16px;
        width: 30%;
    }
</style>