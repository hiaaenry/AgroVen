<head>
    <link href="cadEstilo.css" rel="stylesheet">
</head>

<body>
    <div class="tabela">
        <div class="coluna">

            <div class="logo">
                <a href="/index.php">
                    <img src="imagem/logo.png" alt="AgroVen" width="100%" />
                </a>
            </div>

            <form action="cadCliente.php" method="POST">

                <input type="text" placeholder="Digite seu nome" name="CLI_NOME" required />
                <input type="email" placeholder="Digite seu e-mail" name="CLI_EMAIL" required />
                <input type="password" placeholder="Digite sua senha" name="CLI_SENHA" required />

                <button class="cadastrar" type="submit">Cadastrar-se</button>

            </form>

        </div>
        <div class="coluna">

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
</body>