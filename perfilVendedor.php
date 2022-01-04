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

        <div class="tudo">
            <h1>Olá,
                <?php
                echo ($_SESSION["VEN_NOME"]);
                ?>
            </h1>

            <p>E-mail cadastrado: <?php echo ($_SESSION["VEN_EMAIL"]); ?> </p>
            <p>ID: <?php echo ($_SESSION["VEN_ID"]); ?> </p>
            <a href="meusProdutos.php">
                <p>Meus Produtos</p>
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