<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="topnav">

        <div class="logo">
            <a href="index.php">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </a>
        </div>

    </div>

    <form action="login.php" method="POST">

        <div class="container">

            <input type="email" placeholder="Digite seu e-mail" name="email" required>

            <input type="password" placeholder="Digite sua senha" name="senha" required>

            <button name="cadastrar" class="entrar" type="submit">Entrar</button>
            <a href="escolha.php">Não tem uma conta?</a>

        </div>

    </form>

    <footer>
        <a href="https://github.com/Rayaninha/AgroVen.git" class="fa fa-github"></a>
        <a href="" class="fa fa-instagram"></a>
    </footer>

</body>

<style>
    .container {
        margin: 10% 30% 0% 30%;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 15px 20px;
        margin: 8px 0px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
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

    footer {
        position: absolute;
    }
</style>