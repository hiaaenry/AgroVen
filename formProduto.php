<?php
session_start();
require "verifica.php";
?>

<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>AgroVen</title>
</head>

<body>

    <div class="topnav">

        <div class="logo">
            <img src="imagem/logo.png" alt="AgroVen" width="100px">
        </div>

        <a href="perfilVendedor.php">
            <p class="fa fa-user">
                <?php
                echo ($_SESSION["VEN_NOME"]);
                ?>
            </p>
        </a>

    </div>

    <h1 style="text-align: center;">Qual a boa?</h1>

    <div class="tabela">
        <form method="POST" action="produto.php" enctype="multipart/form-data">
            <div class="coluna">
                <h3>Informações do Produto:</h3>
                <input type="text" name="nome" placeholder="Nome do Produto" required><br><br>
                <input type="text" name="descricao" placeholder="Descrição do Produto" required style="padding-bottom: 20%;"><br><br>

                <!-- <h3>Tipo do Produto</h3>
				<input type="radio" value="frutas" id="frutas" name="produto" />
				<label for="frutas">Frutas</label><br />
				<input type="radio" value="verduras" id="verduras" name="produto" />
				<label for="verduras">Verduras</label><br />
				<input type="radio" value="legumes" id="legumes" name="produto" />
				<label for="legumes">Legumes</label><br />
				<input type="radio" value="animais" id="animais" name="produto" />
				<label for="animais">Animais</label><br />
                <input type="radio" value="derivados" id="derivados" name="produto" />
				<label for="derivados">Derivados</label><br /> -->

                <h3>R$:</h3><input type="number" name="preco" placeholder="Preço do Produto R$:" required><br><br>
            </div>
            <div class="coluna">
                <h3>Imagem</h3>
                <input type="file" name="imagem" required>

                <!-- <h3>Informações Opcionais</h3>

				<input type="checkbox" name="obs" id="numberp" />
				<label for="number">Ativar número de contato pessoal.</label><br />
				<input type="checkbox" name="obs" id="numberc" />
				<label for="number">Ativar número de contato coorporativo.</label><br />
				<input type="checkbox" name="obs" id="local" />
				<label for="number">Aceitar recebimento da retirada do produto no local!</label><br />
				<input type="checkbox" name="obs" id="localc" />
				<label for="number">Compartilhar localização</label><br />
				<br />
				<br /> -->
                <input type="submit" name="cadastrar" class="publicar" value="Anunciar Produto">
            </div>
        </form>
    </div>
</body>
<footer>
    <a class="fa fa-github"></a>
    <a class="fa fa-instagram"></a>
</footer>
<style>
    body {
        background-color: white;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 15px 20px;
        margin: 1% 0%;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
        background-color: whitesmoke;
    }

    .coluna {
        float: left;
        width: 46%;
        margin: 0% 2% 1% 2%;
    }

    .tabela:after {
        content: "";
        display: table;
        clear: both;
    }

    input[type="file"] {
        float: left;
        padding: 10% 10% 10% 10%;
        margin: 1%;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
        background-color: whitesmoke;
    }

    .publicar {
        border: 2px solid white;
        border-radius: 5px;
        background-color: #f5900c;
        padding: 14px 28px;
        margin: 1% 1%;
        font-size: 16px;
        cursor: pointer;
        float: left;
        width: 30%;
        color: white;
    }

    .publicar:hover {
        border: 2px solid #f5900c;
    }
</style>