<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>Entrar</title>
</head>

<body>
    <div class="topnav">

        <div class="logo">
            <a href="index.php">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </a>
        </div>

        <a href="index.php">
            <div class="inicio"> Página Inicial</div>
        </a>

        <a href="formLogin.php">
            <div class="active"> Entrar</div>
        </a>

    </div>

    <form action="login.php" method="POST">

        <div class="container">
            <h1>ENTRAR</h1>
            <input type="email" placeholder="Digite seu e-mail" name="email" required>
            <input type="password" placeholder="Digite sua senha" name="senha" required>
            <b><a href="escolha.php" style="color: black;">Não tem uma conta?</a></b>
            <button name="cadastrar" type="submit">Entrar</button>

        </div>

    </form>

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
    }

    .topnav div.active {
        background-color: #FFBD59;
        color: black;
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
        background-color: #FFBD59;
        color: black;
        opacity: 0.8;
    }

    .container {
        margin: 5% 30% 10% 30%;
        text-align: center;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 15px 20px;
        margin: 8px 0px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 100px;
        box-sizing: border-box;
    }

    button {
        background-color: #662113;
        color: white;
        padding: 14px 20px;
        margin: 2% 25% 0% 25%;
        border: none;
        cursor: pointer;
        width: 50%;
        border-radius: 100px;
    }

    button:hover {
        opacity: 0.8;
        cursor: pointer;
    }

    footer {
        background-color: #FFBD59;
    }
</style>