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

        <a>
            <div class="logo">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </div>
        </a>

        <a href="indexVendedor.php">
            <div class="inicio"> Página Inicial</div>
        </a>

        <a href="perfilVendedor.php">
            <div class="active">
                <?php
                echo ($_SESSION["VEN_NOME"]);
                ?>
            </div>
        </a>

    </div>

    <div class="tudo">
        <img src="imagem/busca.png" alt="imagem" style="width: 20em; margin-left: 60%">
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
                        ?>
                    </div>
                <?php
            }
                ?>

                </div>
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

    .topnav div.active {
        background-color: white;
        color: #5c913b;
    }

    .active,
    .entrar,
    .inicio {
        float: left;
        color: white;
        font-size: 17px;
        padding: 2% 2% 2% 2%;
    }

    .active:hover,
    .entrar:hover,
    .inicio:hover {
        background-color: white;
        color: #5c913b;
        opacity: 0.8;
    }

    .tudo {
        margin: 0% 10% 10% 10%;
    }

    .listagem {
        margin-top: 2%;
    }

    .coluna1 {
        float: left;
        background-color: #89A252;
        padding: 30px;
    }

    .coluna1 img {
        width: 200px;
        max-height: 150px;
    }

    .coluna2 {
        background-color: #89A252;
        padding: 30px;
    }

    button {
        border: none;
        margin-right: 2%;
        border-radius: 5px;
        background-color: #f5900c;
        padding: 1% 1%;
        font-size: 16px;
        cursor: pointer;
        width: 30%;
        color: white;
    }

    button:hover {
        opacity: 0.8;
    }
</style>