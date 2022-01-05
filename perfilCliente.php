<?php
session_start();
require 'verifica.php';
?>

<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="topnav">

        <div class="logo">
            <a href="indexCliente.php">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </a>
        </div>

        <a href="formCompra.php">
            <p class="fa fa-shopping-cart">
                Carrinho
            </p>
        </a>

    </div>

    <div class="tudo">
        <h1>Olá,
            <?php
            echo ($_SESSION["CLI_NOME"]);
            ?>
        </h1>

        <p>E-mail cadastrado: <?php echo ($_SESSION["CLI_EMAIL"]); ?> </p>
        <p>ID: <?php echo ($_SESSION["CLI_ID"]); ?> </p>

        <a href="indexChat.php">
            <p>Caixa de Mensagens</p>
        </a>
        <a href="sair.php">
            <p>sair</p>
        </a>
    </div>

    <footer>
        <a href="https://github.com/Rayaninha/AgroVen.git" class="fa fa-github"></a>
        <a href="" class="fa fa-instagram"></a>
    </footer>

</body>

<style>
    .tudo {
        float: left;
        width: 40%;
        margin: 10% 30% 50px 30%;
        text-align: center;
    }

    footer {
        position: absolute;
    }
</style>