<head>
    <link href="geral.css" rel="stylesheet">
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

        <a href="escolha.php">
            <div class="inicio"> Escolher</div>
        </a>

        <a href="formLogin.php">
            <div class="active"> Criar Conta</div>
        </a>

    </div>

    <div class="tabela">
        <div class="coluna1">

            <h1>CRIAR CONTA</h1>

            <form action="cadCliente.php" method="POST">
                <!-- Dados Pessoais -->
                <input type="text" placeholder="Seu nome" name="CLI_NOME" required />
                <input type="email" placeholder="Seu e-mail" name="CLI_EMAIL" required />
                <input type="password" placeholder="Sua senha" name="CLI_SENHA" required />
                <!-- Endereço -->
                <input type="text" placeholder="Nome da rua" name="CLI_END_RUA" required />
                <input type="number" placeholder="Numero" name="CLI_END_NUMERO" required />
                <input type="text" placeholder="Cidade" name="CLI_END_CIDADE" required />
                <input type="text" placeholder="CEP" name="CLI_END_CEP" required />

                <b><a href="formLogin.php">Já possui uma conta? Entre aqui!</a></b>

                <button class="cadastrar" type="submit">Cadastrar-se</button>

            </form>

        </div>
        <div class="coluna2">

            <div class="linha1">
                <img src="imagem/4.png" alt="quatro" />
                <h3> Compre suas frutas e vegetais na Web. </h3>
            </div>

            <div class="linha2">
                <img src="imagem/5.png" alt="cinco" />
                <h3> Faça suas compras de casa. </h3>
            </div>

            <div class="linha3">
                <img src="imagem/6.png" alt="seis" />
                <h3> Busque por produtos orgânicos. </h3>
            </div>
        </div>
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

    button:hover {
        opacity: 0.8;
    }

    .tabela:after {
        content: "";
        display: table;
        clear: both;
    }

    .coluna1 {
        float: left;
        width: 46%;
        height: 100%;
        margin: 0% 2% 5% 2%;
        padding-top: 5%;
        text-align: center;
    }

    .coluna1 a {
        margin: 8px 15%;
        color: black;
    }

    .coluna2 {
        float: left;
        width: 46%;
        height: 100%;
        margin: 5% 2% 5% 2%;
        padding-top: 5%;
        text-align: center;
    }

    .coluna2 a {
        margin: 8px 15%;
        color: black;
    }

    .linha1 img {
        float: left;
        width: 20%;
        margin-left: 15%;
        margin-right: 5%;
        margin-bottom: 20px;
        border-radius: 50%;
    }

    .linha1 h3 {
        width: 70%;
        padding: 9%;
        text-align: center;
    }

    .linha2 img {
        float: left;
        width: 20%;
        margin-left: 15%;
        margin-right: 5%;
        margin-bottom: 20px;
        border-radius: 50%;
    }

    .linha2 h3 {
        width: 70%;
        padding: 9%;
        text-align: center;
    }

    .linha3 img {
        float: left;
        width: 20%;
        margin-left: 15%;
        margin-right: 5%;
        margin-bottom: 20px;
        border-radius: 50%;
    }

    .linha3 h3 {
        width: 70%;
        padding: 5%;
        text-align: center;
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

    footer {
        background-color: #FFBD59;
    }
</style>