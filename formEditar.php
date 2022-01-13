<?php
session_start();
include_once 'conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>

<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>Agroven</title>
</head>

<body>
    <div class="topnav">

        <a href="indexVendedor.php">
            <div class="logo">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </div>
        </a>

        <a href="indexVendedor.php">
            <div class="link"> Página Inicial</div>
        </a>

        <a href="perfilVendedor.php">
            <div class="link">
                <?php
                echo ($_SESSION["VEN_NOME"]);
                ?>
            </div>
        </a>

        <a>
            <div class="active"> Editar</div>
        </a>

    </div>
    <div class="tudo">
        <h1>Editar Produto:</h1>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        $selecionar = "SELECT * FROM AGR_PRODUTO WHERE PRO_ID=$id";


        $editar = $conectar->prepare($selecionar);
        $editar->execute();
        $row = $editar->fetch(PDO::FETCH_ASSOC);

        ?>
        <form enctype="multipart/form-data" method="POST" action="editar.php">
            <input type="hidden" name="id" value="<?php if (isset($row['PRO_ID'])) {
                                                        echo $row['PRO_ID'];
                                                    } ?>">
            <label>Nome: </label><br>
            <input type="text" name="nome" placeholder="Nome do Produto" value="<?php if (isset($row['PRO_NOME'])) {
                                                                                    echo $row['PRO_NOME'];
                                                                                } ?>"><br><br>
            <label>Descrição: </label><br>
            <input type="text" name="descricao" placeholder="Descrição do Produto" style="padding-bottom: 20%;" value="<?php if (isset($row['PRO_DESCRICAO'])) {
                                                                                                echo $row['PRO_DESCRICAO'];
                                                                                            } ?>"><br><br>
            <label>Preço: </label><br>
            <input type="text" name="preco" placeholder="Preço do Produto" value="<?php if (isset($row['PRO_PRECO'])) {
                                                                                            echo $row['PRO_PRECO'];
                                                                                        } ?>"><br><br>
            <input name="editar" type="submit" value="Editar">
            
        </form>
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
    .tudo {
        width: 40%;
        margin: 5% 30% 5% 30%;
        text-align: justify;
        padding: 2%;
        background-color: white;
        border: 1px solid grey;
        border-radius: 5px;
    }

    input[type='text'] {
        width: 100%;
        padding: 15px 20px;
        display: inline-block;
        border: 2px solid whitesmoke;
        box-sizing: border-box;
        border-radius: 5px;
        background-color: whitesmoke;
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
</style>