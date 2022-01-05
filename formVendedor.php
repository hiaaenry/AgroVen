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

            <form action="cadVendedor.php" method="POST">

                <input type="text" placeholder="Digite seu nome" name="VEN_NOME" required />
                <input type="email" placeholder="Digite seu e-mail" name="VEN_EMAIL" required />
                <input type="password" placeholder="Digite sua senha" name="VEN_SENHA" required />

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