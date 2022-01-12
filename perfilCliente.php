<?php
session_start();
require 'verifica.php';
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

            <a href="index.php">
                <div class="active"> Página Inicial</div>
            </a>

            <a href="perfilCliente.php">
                <p class="inicio">
                    <?php
                    echo ($_SESSION["CLI_NOME"]);
                    ?>
                </p>
            </a>

            <a href="formCompra.php">
                <p class="inicio">
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
            <p>CEP: <?php echo ($_SESSION["CLI_END_CEP"]); ?> Rua: <?php echo ($_SESSION["CLI_END_RUA"]); ?> Cidade: <?php echo ($_SESSION["CLI_END_CIDADE"]); ?></p>
            <a href="formCompra.php">
                <p>
                    Carrinho
                </p>
            </a>
            <!-- <a href="indexChat.php">
                <p>Caixa de Mensagens</p>
            </a> -->
            <a href="sair.php">
                <p>sair</p>
            </a>
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
            width: 40%;
            margin: 5% 30% 5% 30%;
            text-align: justify;
            padding: 2%;
            height: 40%;
            background-color: white;
            box-shadow: 5px 5px 15px #000;
        }
    </style>