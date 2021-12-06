<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
</head>

<body>
    <div class="topnav">
        <div class="links">
            <p onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;" class="fa fa-user-circle" aria-hidden="true">
        </div>
        <div class="logo">
            <a href="index.php">
                <img src="imagem/logo.png" alt="AgroVen" width="100px" />
            </a>
        </div>
    </div>

    <div id="id01" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container" style="padding-top: 35px;">
                <button class="entrar" onclick='sair()'> Entrar </button>
            </div>
        </form>
    </div>
    <div class="tudo">
        <div class="pesquisa">
            <input type="text" placeholder="Pesquise aqui">
        </div>

        <div class="categorias">
            <div class="cartao">
                <img src="imagem.png" alt="animais">
                <h2>Animais</h2>
            </div>
            <div class="cartao">
                <img src="imagem.png" alt="frutas">
                <h2>Frutas</h2>
            </div>
            <div class="cartao">
                <img src="imagem.png" alt="verduras">
                <h2>Verduras</h2>
            </div>
            <div class="cartao">
                <img src="imagem.png" alt="animais">
                <h2>Animais</h2>
            </div>
            <div class="cartao">
                <img src="imagem.png" alt="animais">
                <h2>Animais</h2>
            </div>
        </div>

        <div class="listagem">
            <?php


            $exibir_banco = "SELECT * FROM produto ORDER BY id ASC";

            $exibir = $conectar->prepare($exibir_banco);
            $exibir->execute();

            while ($row = $exibir->fetch(PDO::FETCH_ASSOC)) {
            ?>

                <div class="produto">
                    <div class="coluna">
                        <img src="imagens/<?= $row['id'] ?>/<?= $row['imagem'] ?>" class="img">
                    </div>
                    <div class="coluna">
                        <?php
                        echo "<p>Nome: " . $row['nome'] . "</p>";
                        echo "<p>Descrição: " . $row['descricao'] . "</p>";
                        echo "<p>Preço: " . $row['preco'] . "</p>";
                        /* echo "<a href='cadEditar.php?id=" . $row['id'] . "'>Editar</a><br>";
                        echo "<a href='apagar.php?id=" . $row['id'] . "'>Apagar</a><br>"; */
                        echo "<a href='carrinho.php?id=" . $row['id'] . "'><button>Comprar</button></a><br>";
                        ?>
                    </div>
                <?php
            }
                ?>
                </div>
        </div>
    </div>
</body>
<style>
    a {
        text-decoration: none;
    }

    body {
        background-color: white;
    }

    .topnav {
        background-color: #5c913b;
        overflow: hidden;
        padding: 5px;
    }

    .logo {
        margin-left: auto;
        margin-right: auto;
        width: 6em;
    }

    .topnav p {
        float: right;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav p:hover {
        background-color: #f5900c;
        color: #1d5e28;
        border-radius: 25px;
    }

    input[type="text"] {
        width: 100%;
        padding: 15px 20px;
        margin: 8px 0px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
        background-color: whitesmoke;
    }

    .tudo {
        margin-left: 20%;
    }

    .pesquisa {
        width: 40%;
        margin: 8px 0px;
        display: inline-block;
        box-sizing: border-box;
        border-radius: 5px;
    }

    .categorias {
        background-color: #5c913b;
        width: 50%;
        height: 140px;
        padding: 1%;
        text-align: center;
    }

    .cartao {
        float: left;
        margin: 0px 1%;
        padding: 1% 1%;
    }

    .cartao img {
        border-radius: 50%;
        width: 70px;
    }

    .listagem {
        margin-top: 2%;
        padding: 1%;
        border-radius: 5px;
    }

    .produto {
        width: 100%;
        float: left;
    }

    .coluna {
        float: left;
        background-color: #5c913b;
        height: 150px;
        padding: 30px;
    }

    .coluna img {
        width: 200px;
        max-height: 200px;
    }

    .entrar {
        background-color: #662113;
        color: white;
        padding: 14px 20px;
        margin: 8px 0px;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 5px;
    }

    .entrar:hover {
        opacity: 0.8;
        cursor: pointer;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    .container {
        padding: 16px;
        text-align: center;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
    }

    .modal-content {
        background-color: white;
        margin: 5% auto 15% auto;
        box-shadow: 5px 5px 15px black;
        width: 40%;
    }

    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #f5900c;
        cursor: pointer;
    }
</style>

</html>