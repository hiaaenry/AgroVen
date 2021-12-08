<?php

include_once 'conexao.php';

?>

    


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Desejos </title>
</head>


<body>
         
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <div class="topnav">
        <div class="links">
            <a onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;" class="fa fa-user-circle" aria-hidden="true">

                <a href="" class="fa fa-phone" aria-hidden="true">
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
                <!-- <img src="#" alt="fotoperfil"> -->

<a  class="entrar" onclick='sair()'> Saa >
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


            $exibir_banco = "SELECT p.nome AS produto, p.preco AS preco, p.id AS id 
                             FROM `lista_de_desejos` AS ld 
                             LEFT JOIN `produto` AS p
                             ON ld.id_produto = p.id
                             ORDER BY id ASC";
            $exibir = $conectar->prepare($exibir_banco);
            $exibir->execute();
            while ($row = $exibir->fetch(PDO::FETCH_ASSOC)) {
            ?>

<div class="favoritos">
</body> 

 
</div>
                <div class="produto">
                    <div class="coluna">
                         <!--- <img src="imagens/<?= $row['nome'] ?>/<?= $row['preco'] ?>" class="img"> -->
                    </div>
                    <div class="coluna">
                        <?php
                        echo "Nome: " . $row['produto'] . "<br>";
                       
                        echo "Preço: " . $row['preco'] . "<br>";
                        ?>
                       <!--- <input type="submit" value="comprar"> -->
                    </div>
                <?php
                echo "<a href='cadEditar.php?id=" . $row['id'] . "'>Editar</a><br>";
                echo "<a href='apagar.php?id=" . $row['id'] . "'>Apagar</a><br>";
                echo "<a href='carrinho.php?id=" . $row['id'] . "'>Comprar</a><br>";
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
        background-color: #398646;
    }
    .favoritos {

      
        width: 30%;
                    white-space: normal;
    }
    .topnav {
        background-color: #1d5e28;
        overflow: hidden;
        padding: 5px;
    }

    .logo {
        margin-left: auto;
        margin-right: auto;
        width: 6em;
    }

    .links a {
        float: right;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .links :hover {
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
        background-color: #1d5e28;
        width: 50%;
        height: 140px;
        padding: 1%;
        border-radius: 5px;
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
        background-color: #1d5e28;
        width: 50%;
        margin-top: 2%;
        height: 1000px;
        padding: 1%;
        border-radius: 5px;
    }

    .produto {
        width: 100%;
        float: left;
        margin: 0px 1%;
        padding: 1% 1%;
    }

    .coluna {
        float: left;
        width: 46%;
        margin: 0px 2% 50px 2%;
    }

    .coluna img {
        width: 200px;
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

