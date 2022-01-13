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

        <a href="indexCliente.php">
            <div class="logo">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </div>
        </a>

        <a href="indexCliente.php">
            <div class="link"> Página Inicial</div>
        </a>

        <a href="perfilCliente.php">
            <div class="active">
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
        <a href="sair.php">
            <button>Sair</button>
        </a>
        <a href="">
            <button>Editar</button>
        </a>
        <!-- <a href="indexChat.php">
                <p>Caixa de Mensagens</p>
            </a> -->
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
        background-image: url(imagem/perfilCliente.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: 50em;
    }

    .tudo {
        width: 40%;
        margin: 5% 30% 5% 30%;
        text-align: justify;
        padding: 2%;
        height: 40%;
        background-color: white;
        border: 1px solid grey;
        border-radius: 5px;
    }

    button {
        margin: 1% 0% 0% 0%;
        padding: 1% 1%;
        font-size: 16px;
        width: 50%;
    }
</style>