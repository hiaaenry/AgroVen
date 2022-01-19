<?php
session_start();
require 'verifica.php';
include_once 'conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$idCliente = ($_SESSION["CLI_ID"]);
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

        <a href="sair.php">
            <div class="fa fa-sign-out"> </div>
        </a>

    </div>


    <div class="tudo">
        <h1>Olá,
            <?php
            echo ($_SESSION["CLI_NOME"]);
            ?>
        </h1>

        <?php
        $exibir = $conectar->query("SELECT CLI_EMAIL, CLI_END_CIDADE, CLI_END_RUA, CLI_END_NUMERO, CLI_END_CEP FROM AGR_CLIENTES WHERE CLI_ID = $idCliente;");


        while ($result = $exibir->fetch(PDO::FETCH_ASSOC)) {
            echo "Email: {$result['CLI_EMAIL']} <br />";
            echo "Cidade: {$result['CLI_END_CIDADE']} <br />";
            echo "Rua: {$result['CLI_END_RUA']} <br />";
            echo "Numero: {$result['CLI_END_NUMERO']} <br />";
            echo "CEP: {$result['CLI_END_CEP']} <br />";

        }
        ?>

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

    .fa-sign-out {
        position: absolute;
        right: 5%;
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