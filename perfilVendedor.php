<?php
session_start();
require 'verifica.php';
$login = ($_SESSION["VEN_ID"]);
?>

<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="topnav">

        <div class="logo">
            <a href="indexVendedor.php">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </a>
        </div>

    </div>

    <div class="tabela">

        <div class="coluna">
            <h1>Olá,
                <?php
                echo ($_SESSION["VEN_NOME"]);
                ?>
            </h1>

            <p>E-mail cadastrado: <?php echo ($_SESSION["VEN_EMAIL"]); ?> </p>
            <p>ID: <?php echo ($_SESSION["VEN_ID"]); ?> </p>

            <a href="sair.php">
                <p>sair</p>
            </a>
        </div>

        <div class="coluna">
            <div class="listagem">
                <?php


                $exibir_banco = "SELECT PRO_NOME, PRO_DESCRICAO, NOME_PRO, PRO_IMAGEM
                                FROM AGR_PRODUTO 
                                INNER JOIN AGR_VENDEDOR ON VENDEDOR.VEN_ID = AGR_PRODUTO.PRO_VEN_FK
                                WHERE PRO_VEN_FK = " . $_SESSION["VEN_ID"];

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
                            echo "<a href='cadEditar.php?id=" . $row['PRO_ID'] . "'>Editar</a><br>";
                            echo "<a href='apagar.php?id=" . $row['PRO_ID'] . "'>Apagar</a><br>";
                            echo "<a href='compra.php?idProduto=" . $row['PRO_ID'] . "'>Comprar</a><br>";                        ?>
                        </div>
                    <?php
                }
                    ?>
                    </div>
            </div>

        </div>

        <footer>
            <a href="https://github.com/Rayaninha/AgroVen.git" class="fa fa-github"></a>
            <a href="" class="fa fa-instagram"></a>
        </footer>

</body>

<style>
    .coluna {
        float: left;
        width: 40%;
        margin: 2% 5% 2% 5%;
        height: 70%;
    }

    .tabela:after {
        content: "";
        display: table;
        clear: both;
    }
</style>