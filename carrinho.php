<?php

include_once 'conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>

<body>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <div class="topnav">
        <div class="links">
            <a onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;"
                class="fa fa-user-circle" aria-hidden="true">

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
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
            </div>

            <div class="container" style="padding-top: 35px;">

                <a href="carrinho.html">Carrinhos</a>

                <button class="entrar" onclick='sair()'> Sair </button>
            </div>
        </form>
    </div>

    <div class="tudo">

        <div class="listagem">
            <?php
       

        $selecionar = "SELECT * FROM produto WHERE id=$id";
        
        
        $compra = $conectar->prepare($selecionar);
        $compra->execute();
        $row = $compra->fetch(PDO::FETCH_ASSOC); 
        ?>

            <div class="produto">
                <div class="coluna">
                    <img src="imagens/<?=$row['id']?>/<?=$row['imagem']?>" class= "img">
                </div>
                <div class="coluna">

                    <?php
                    echo "Nome: " . $row['nome'] . "<br>";
            echo "Descrição: " . $row['descricao'] . "<br>";
            echo "Preço: " . $row['preco'] . "<br>";
             ?>
            <p>Quantidade:</p>
            <input type="number" min="1">
            <p>Especifique a grandeza:</p>
            <input type="text">
            <input type="submit" value="comprar">
            <input type="text" id="input">
            <button class="button" id="botao">imprimir</button>
            </inpu>
        </div>
    </div>

    </div>
    </div>


</body>

<script>
    //desabilita o botão no início
    document.getElementById("botao").disabled = true;

    //cria um event listener que escuta mudanças no input
    document.getElementById("input").addEventListener("input", function (event) {

        //busca conteúdo do input
        var imprimir = document.getElementById("input").value;

        //valida conteudo do input 
        if (imprimir !== null && imprimir !== '') {
            //habilita o botão
            document.getElementById("botao").disabled = false;
        } else {
            //desabilita o botão se o conteúdo do input ficar em branco
            document.getElementById("botao").disabled = true;
        }
    });
</script>

<style>
    a {
        text-decoration: none;
    }

    body {
        background-color: #398646;
    }

    .tudo {
        margin-left: 20%;
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

    input[type="text"],
    [type="number"] {
        width: 80%;
        padding: 15px 20px;
        margin: 8px 0px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
    }

    .listagem {
        background-color: #1d5e28;
        width: 50%;
        margin-top: 2%;
        height: 400px;
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