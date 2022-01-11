<head>
    <link href="geral.css" rel="stylesheet">
</head>

<body>

    <div class="topnav">

        <a>
            <div class="logo">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </div>
        </a>

        <a href="index.php">
            <p class="active"> Página Inicial</p>
        </a>

        <a href="formLogin.php">
            <p class="fa fa-user"> Login</p>
        </a>

    </div>
    <div class="tabela">
        <div class="coluna">

            <h1>CRIAR CONTA</h1>

            <form action="cadVendedor.php" method="POST">
                <!-- Dados Pessoais -->
                <input type="text" placeholder="Seu nome" name="VEN_NOME" required />
                <input type="email" placeholder="Seu e-mail" name="VEN_EMAIL" required />
                <input type="password" placeholder="Sua senha" name="VEN_SENHA" required />
                <!-- Endereço -->
                <input type="text" placeholder="Nome da rua" name="VEN_END_RUA" required />
                <input type="number" placeholder="Numero" name="VEN_END_NUMERO" required />
                <input type="text" placeholder="Complemento" name="VEN_END_COMPLEMENTO" required />
                <input type="text" placeholder="Cidade" name="VEN_END_CIDADE" required />
                <input type="text" placeholder="Ponto de Referência" name="VEN_END_PONT_REF" required />

                <a href="formLogin.php">Já possui uma conta? Entre aqui!</a>

                <button class="cadastrar" type="submit">Cadastrar-se</button>

            </form>

        </div>
        <div class="coluna">

            <div class="linha1">
                <img src="imagem/1.png" alt="um" />
                <h3> Registre-se e venda seus produtos online.</h3>
            </div>

            <div class="linha2">
                <img src="imagem/2.png" alt="dois" />
                <h3> Informe seus produtos por meio de texto, foto ou vídeo.</h3>
            </div>

            <div class="linha3">
                <img src="imagem/3.png" alt="tres" />
                <h3> Fale diretamente com cliente pelo chat, para o acordo das entregas.</h3>
            </div>
        </div>
    </div>
</body>

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
        background-color: #FFBD59;
    }

    button {
        border: 2px solid #FFBD59;
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
        border: 2px solid #5c913b;
    }

    h3 {
        color: white;
        font-weight: 600;
    }

    .tabela:after {
        content: "";
        display: table;
        clear: both;
    }

    .coluna {
        float: left;
        width: 46%;
        height: 100%;
        margin: 0px 2% 50px 2%;
        padding-top: 5%;
    }

    .coluna a {
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