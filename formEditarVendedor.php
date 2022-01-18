<?php
session_start();
include_once 'conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>

<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>AgroVen</title>
</head>

<body>

    <div class="topnav">

        <a href="indexVendedor.php">
            <div class="logo">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </div>
        </a>

        <a href="perfilVendedor.php">
            <div class="active">
                <?php
                echo ($_SESSION["VEN_NOME"]);
                ?>
            </div>
        </a>

        <a href="meusProdutos.php">
            <div class="link"> Meus Produtos</div>
        </a>

        <a href="sair.php">
            <div class="fa fa-sign-out"> </div>
        </a>

    </div>

    <div class="tudo">
        <h1>EDITAR CONTA</h1>


        

        <form enctype="multipart/form-data" method="POST" action="editarVendedor.php">
            <input type="hidden" name="id" value="<?php if (isset($row['VEN_ID'])) {
                echo $row['VEN_ID'];
            } ?>">
            <!-- Dados Pessoais -->
            <input type="text" name="nome" placeholder="Novo nome" value="<?php if (isset($row['VEN_NOME'])) {
                echo $row['VEN_NOME'];
            } ?>"><br><br>
            <input type="email" name="email" placeholder="Novo email" value="<?php if (isset($row['VEN_EMAIL'])) {
                echo $row['VEN_EMAIL'];
            } ?>"><br><br>
            <input type="password" name="senha" placeholder="Nova senha" value="<?php if (isset($row['VEN_SENHA'])) {
                echo $row['VEN_SENHA'];
            } ?>"><br><br>
            <!-- Endereço -->
            <input type="text" name="rua" placeholder="Nova rua" value="<?php if (isset($row['VEN_END_RUA'])) {
                echo $row['VEN_END_RUA'];
            } ?>"><br><br>
            <input type="number" name="numero" placeholder="Novo numero" value="<?php if (isset($row['VEN_END_NUMERO'])) {
                echo $row['VEN_END_NUMERO'];
            } ?>"><br><br>
            <input type="text" name="cidade" placeholder="Nova cidade" value="<?php if (isset($row['VEN_END_CIDADE'])) {
                echo $row['VEN_END_CIDADE'];
            } ?>"><br><br>
            <input type="number" name="CEP" placeholder="Novo CEP" value="<?php if (isset($row['VEN_END_CEP'])) {
                echo $row['VEN_END_CEP'];
            } ?>"><br><br>

            <button class="cadastrar" type="submit">Editar</button>

            <?php if (isset($_SESSION['erro'])) {
                echo $_SESSION['erro'];
                unset($_SESSION['erro']);
                unset($_SESSION['erroEmail']);
            }
            ?>

        </form>
    </div>

    <footer>
        <hr>
        <div class="ajuda">Ajuda e Contato</div>
        <div class="dica">Dicas de Segurança</div>
        <a href="https://github.com/Rayaninha/AgroVen.git" class="fa fa-github"></a>
        <a href="" class="fa fa-instagram"></a>
        <p><a href="">Sobre o Agroven</a>, <a href="">Termos de uso, Política de privacidade</a> e <a href="">Proteção à Propriedade Intelectual</a><br>
        © Bom Negócio Atividades de Internet Ltda. Avenida Duarte Coelho, 1654, Campina de Feira - 53605-030 - Igarassu, PE</p>
    </footer>
</body>


<style>
    body {
        background-image: url(imagem/figura.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: 50em;
        background-color: #FFBD59;
        color: black;
    }

    .tudo {
        margin: 5% 20% 10% 20%;
        text-align: center;
    }

    button {
        border: none;
        border-radius: 100px;
        background-color: #5c913b;
        padding: 14px 28px;
        margin: 20px 35%;
        font-size: 16px;
        cursor: pointer;
        float: left;
        width: 30%;
        color: white;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="number"] {
        width: 70%;
        padding: 15px 20px;
        margin: 8px 15%;
        display: inline-block;
        border: 2px solid white;
        box-sizing: border-box;
        border-radius: 100px;
    }

    input[type='submit'] {
        border: none;
        border-radius: 5px;
        background-color: #FFBD59;
        cursor: pointer;
        color: white;
        margin: 2% 35% 0% 35%;
        padding: 1% 1%;
        font-size: 16px;
        width: 30%;
    }

    input[type='submit']:hover {
        opacity: 0.8;
    }

    footer {
        background-color: #FFBD59;
    }
</style>