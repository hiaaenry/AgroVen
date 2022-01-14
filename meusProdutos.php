<?php

session_start();
require 'verifica.php';
include_once 'conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$idVendedor = ($_SESSION["VEN_ID"]);

?>

<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>AgroVen</title>
</head>

<body>

    <div class="topnav">

        <a href="indexVendedor.php">
            <div class="logo">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </div>
        </a>

        <a href="perfilVendedor.php">
            <div class="link">
                <?php
                echo ($_SESSION["VEN_NOME"]);
                ?>
            </div>
        </a>

        <a href="meusProdutos.php">
            <div class="active"> Meus Produtos</div>
        </a>

        <a href="sair.php">
            <div class="fa fa-sign-out"> </div>
        </a>

    </div>

    <a href="formProduto.php">
        <button class="anuncie">Anuncie mais!</button>
    </a>

    <div class="tudo">
        <div class="listagem">
            <?php

            $exibir_banco = "SELECT * FROM AGR_PRODUTO WHERE PRO_VEN_ID = '$idVendedor' ORDER BY PRO_ID ASC";

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
                        echo "<a href='formEditar.php?id=" . $row['PRO_ID'] . "'><button>Editar</button></a>";
                        echo "<a href='apagar.php?id=" . $row['PRO_ID'] . "'><button>Apagar</button></a>";

                        $busca = "SELECT * FROM AGR_COMPRA_PRODUTO WHERE CPP_PRO_ID = '$id'";

                        $stmt = $conectar->query($busca);

                        $result = $stmt->fetch();

                        if ($result == true) {
                            echo "<p class='fa fa-exclamation'> Produto Vendido<p/>";
                        }
                        ?>
                    </div>
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
        min-height: fit-content;
    }

    .fa-sign-out {
        position: absolute;
        right: 5%;
    }

    .tudo {
        margin: 5% 10% 10% 10%;
        min-height: 50%;
    }

    .listagem {
        background-color: white;
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
        margin-right: 2%;
        padding: 1% 1%;
        font-size: 16px;
        width: 30%;
        color: white;
    }

    button:hover {
        opacity: 0.8;
    }

    .anuncie {
        position: absolute;
        background-color: #662113;
        width: 10%;
        top: 15%;
        right: 8%;
    }
</style>