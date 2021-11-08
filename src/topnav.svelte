<script>

</script>

<body>
    <div class="topnav">
	
        <a onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;"
          class="fa fa-user-circle" aria-hidden="true"></a>
  
        <a href="#numero" class="fa fa-phone" aria-hidden="true"></a>
  
        <div class="logo">
          <img src={logo} alt="AgroVen" width="100px">
        </div>
  
      </div>
  
      <div id="id01" class="modal">
  
        <form class="modal-content animate" action="/action_page.php" method="post">
  
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
              title="Close Modal">&times;</span>
          </div>
  
          <div class="container" style="padding-top: 35px;">
  
            <input type="email" placeholder="Digite seu e-mail" name="uname" required>
  
            <input type="password" placeholder="Digite sua senha" name="psw" required>
  
            <button class="entrar" type="submit">Entrar</button>
  
            <button class="google" type="submit">
              <a href="#" class="fa fa-google fa-fw"></a>Entre com o google
            </button>
  
            <a href="registro.html">Não tem uma conta?</a>
  
          </div>
        </form>
      </div>
</body>

<style>
    .topnav {
    background-color: #1d5e28;
    overflow: hidden;
    padding: 5px;
  }

  .logo {
    margin-left: auto;
    margin-right: auto;
    width: 6em;
  }

  .topnav a {
    float: right;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  .topnav a:hover {
    background-color: #f5900c;
    color: #1d5e28;
    border-radius: 25px;
  }
</style>