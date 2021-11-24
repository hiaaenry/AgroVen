<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos</title>
    </head>
    <body>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <div class="topnav">
        <div class="links">
          <a onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;" class="fa fa-user-circle" aria-hidden="true">  

                 <a href="" class="fa fa-phone" aria-hidden="true"> 
        </div>
        <div class="logo">
            <a href="bindex.php">
                <img src="imagem/logo.png" alt="AgroVen" width="100px" />
            </a>
        </div>
    </div>
 
    <div id="id01" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
              <!--  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
            </div> 

          <!--  <div class="container" style="padding-top: 35px;">
                 <img src="#" alt="fotoperfil"> -->

                <!-- <button class="entrar" onclick='sair()'> Sair </button> -->
            </div>
        </form>
    </div> 

    <div class="tabela">
        <?php

        $exibir_banco = "SELECT * FROM produto ORDER BY id ASC";

        $exibir = $conectar->prepare($exibir_banco);
        $exibir->execute();

        while ($row = $exibir->fetch(PDO::FETCH_ASSOC)) {
           
            echo "Nome: " . $row['nome'] . "<br>";
            echo "Descrição: " . $row['descricao'] . "<br>";
            echo "Preço: " . $row['preco'] . "<br>";
            ?> 
            <img src="imagens/<?=$row['id']?>/<?=$row['imagem']?>" class= "img"> 
            <?php
            echo "<a href='cadEditar.php?id=".$row['id']."'>Editar</a><br>";
            echo "<a href='apagar.php?id=".$row['id']."'>Apagar</a><br><hr>";

        }
        ?>
    </div>
    </body>
    <style>
        a {
        text-decoration: none;
    }

    body {
        background-color: #398646;
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

    .tabela {
        margin-left: 20%;
        margin-right: 20%;
        text-align: justify;
    }
    .img{

    width: 255px;
    height: 250px;
    }
    </style>
</html>
