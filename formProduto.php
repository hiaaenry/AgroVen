<?php
session_start();
require "verifica.php";
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
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

    <h1 style="text-align: center;">Qual a boa?</h1>

    <div class="tudo">
        <form method="POST" action="produto.php" enctype="multipart/form-data">
            <h3>Informações do Produto</h3>
            <input type="text" name="nome" placeholder="Nome do Produto" required><br><br>
            <input type="text" name="descricao" placeholder="Descrição do Produto" required style="padding-bottom: 20%;"><br><br>
            <input type="number" name="preco" placeholder="Preço do Produto R$:" required><br><br>
            <h3>Imagem:</h3>
            <input type="file" name="imagem" required>

            <input type="submit" name="cadastrar" class="publicar" value="Anunciar Produto">

        </form>
    </div>
</body>
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
<style>
    body {
        background-image: url(imagem/produto.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
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

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 15px 20px;
        margin: 1% 0%;
        display: inline-block;
        border: none;
        box-sizing: border-box;
        border-radius: 5px;
        background-color: white;
    }

    .tudo {
        width: 50%;
        margin: 0% 25% 10% 25%;
        height: 100%;
    }

    .tabela:after {
        content: "";
        display: table;
        clear: both;
    }

    input[type="file"] {
        width: 100%;
        float: left;
        padding: 10% 0% 10% 25%;
        margin: 1% 0%;
        border: none;
        box-sizing: border-box;
        border-radius: 5px;
        background-color: white;
    }

    .publicar {
        border: none;
        border-radius: 5px;
        background-color: #f5900c;
        padding: 14px 28px;
        margin: 1% 35% 0% 35%;
        font-size: 16px;
        cursor: pointer;
        width: 30%;
        color: white;
    }

    .publicar:hover {
        opacity: 0.8;
    }
</style>