<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>Ecolha</title>
</head>

<body>

    <div class="topnav">

        <div class="logo">
            <a href="index.php">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </a>
        </div>

    </div>

    <div class="container">

        <a href="formCliente.php">
            <button>
                <h1>Cliente</h1>
            </button>
        </a>

        <a href="formVendedor.php">
            <button>
                <h1>Vendedor</h1>
            </button>
        </a>

    </div>

    <footer>
        <a href="https://github.com/Rayaninha/AgroVen.git" class="fa fa-github"></a>
        <a href="" class="fa fa-instagram"></a>
    </footer>
</body>

<style>
    body {
        background-image: url(imagem/fundo.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 50%;
    }

    .container {
        background-color: white;
        align-items: center;
        margin: 5% 30% 10% 30%;
    }

    button {
        border: 2px solid white;
        border-radius: 5px;
        background-color: white;
        padding: 14px 28px;
        font-size: 16px;
        float: left;
        width: 40%;
        margin: 20% 5% 0% 5%;
        box-shadow: 5px 5px 15px black;
        color: #662113;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    footer {
        position: absolute;
    }
</style>