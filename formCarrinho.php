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

        <a href="indexCliente.php">
            <div class="logo">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </div>
        </a>

        <a href="perfilCliente.php">
            <div class="link">
                <?php
                echo ($_SESSION["CLI_NOME"]);
                ?>
            </div>
        </a>

        <a href="listarProdutosLogado.php">
            <div class="link"> Buscar Produtos</div>
        </a>

        <a href="formCarrinho.php">
            <div class="fa fa-shopping-cart"> </div>
        </a>

        <a href="sair.php">
            <div class="fa fa-sign-out"> </div>
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
                        <form action="alterarQuantidade.php" method="POST" id="form">
                            <input type="number" min="1" placeholder="Alterar Quantidade" id="quantidade" name="quantidade"></input>
                            <input type="hidden" name="id" value='<?= $result["PRO_ID"] ?>'></input>
                        </form>
                        <?php
                        echo "<a href='retirarDoCarrinho.php?idProduto=" . $result['PRO_ID'] . "'><button>Remover</button></a>";
                        ?>
                    </div>
                </div>
            <?php
            };
            ?>
        </div>
    </div>
    <a href='listarProdutosLogado.php'>
        <button>Continuar Comprando</button>
    </a>
    <a href="compra.php">
        <button type="submit">Finalizar Compra</button>
    </a>
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

<script>
    function envio() {
        const input = document.getElementById("quantidade");
        const form = document.getElementById("form");

        if (input.value.length > 1) {
            form.submit();
        }
    }

    document.getElementById("quantidade").oninput = envio;
</script>

<style>
    body {
        background-image: url(imagem/busca.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: 60em;
    }

    .topnav div.fa-shopping-cart {
        background-color: white;
        color: #5c913b;
    }

    .fa-sign-out {
        position: absolute;
        right: 5%;
    }

    .tudo {
        margin: 10% 20% 2% 20%;
    }

    input[type="number"] {
        background-color: whitesmoke;
        width: 100%;
        padding: 2%;
        margin: 1% 0% 1% 0%;
        display: inline-block;
        border: 1px solid whitesmoke;
        box-sizing: border-box;
        border-radius: 5px;
    }

    .listagem {
        width: 100%;
        padding: 1% 0% 0% 0%;
    }

    .produto {
        border-radius: 5px;
        width: 100%;
        float: left;
        border: 1px solid grey;
        background-color: white;
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
        padding: 14px 28px;
        font-size: 16px;
        ;
        width: 50%;
        margin: 1% 25% 0% 25%;
    }
</style>