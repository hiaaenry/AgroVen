<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>

    <div class="topnav">

        <a href="index.php">
            <div class="logo">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </div>
        </a>

    </div>

    <div class="container">
            <a href="/registro.php">
                <button>
                    <h1>Agricultor</h1>
                </button>
            </a>
            <a href="/registrocliente.php">
                <button>
                    <h1>Cliente</h1>
                </button>
            </a>

    </div>

    <footer>
        <a href="https://github.com/Rayaninha/AgroVen.git" class="fa fa-github"></a>
        <a href="" class="fa fa-instagram"></a>
    </footer>

</body>

</html>
<style>
    body {
        background-image: url(imagem/fundo.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .topnav {
        background-color: #5c913b;
        overflow: hidden;
        padding: 5px;
    }

    .logo {
        margin-left: auto;
        margin-right: auto;
        width: 6em;
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
        margin: 10% 5% 0% 5%;
        box-shadow: 5px 5px 15px black;
        color: #662113;
        cursor: pointer;
    }

    button:hover {
        border: 2px solid #662113;
        background-color: #662113;
        color: white;
    }

    footer {
        width: 100%;
        background-color: #662113;
        color: white;
        font-size: 30px;
        bottom: 0px;
        right: 0px;
        text-align: center;
        position: absolute;
    }

    footer a {
        padding: 30px 0px 30px 0px;
    }
</style>