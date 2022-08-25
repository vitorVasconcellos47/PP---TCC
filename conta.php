<html>
<head>
  <meta charset="utf-8"> 
  <title> Conta </title>
  <link rel="stylesheet" href="_css/header.css">
  <link rel="stylesheet" href="_css/background.css">
  <link rel="stylesheet" href="_css/conta.css">
  <script src="_js/conta.js"></script>
</head>
<body>

<!-- Cabeçalho -->

<div class="nav">
  <div class="logo"> iLume </div>
  <div class="menu">
    <ul>
      <li><a href="index.php"> Home </a></li>
      <li><a href="#" style="color:#9932F5"> Conta </a></li>
      <li><a href="artigos.php"> Artigos </a></li>
      <li><a href="equipe.php"> Equipe </a></li>
    </ul>
  </div>
</div>

<!-- Registrar -->

<container>
  <div class="container">
    <div class="user reg">
      <div class="imgBx"><img src="_gallery/registrar.jpeg"></div>
      <div class="formBx">
        <div>
          <h2> Entrar </h2>
          <input type="text" id="reguser" placeholder="Nome de usuário">
          <input type="password" id="regpass" placeholder="Senha">
            <input type="button" value="Logar" onclick="registrar()">
            <p class="signup"> Não tem uma conta criada? <a href="#" onclick="toggleForm()"> Cadastre-se. </a></p>
        </div>
      </div>
    </div>

<!-- Cadastrar -->

  <div class="user cad">
      <div class="formBx">
        <div>
          <h2> Criar uma conta </h2>
          <input type="text" id="caduser" placeholder="Nome de usuário">
          <input type="text" id="email" placeholder="Endereço de email">
          <input type="password" id="cadpass" placeholder="Crie sua senha">
          <input type="password" id="cadfirm" placeholder="Confirme sua senha">
            <input type="button" value="Cadastrar" onclick="cadastrar()">
            <p class="signup"> Já tem uma conta criada? <a href="#" onclick="toggleForm()"> Entre. </a></p>
        </div>
      </div>
      <div class="imgBx"><img src="_gallery/cadastrar.jpeg"></div>
  </div>
  </div>
</container>

<!-- Luzes -->

<div class="parallax">
    <div class="luzes">
      <span style="--i:11;"></span>
      <span style="--i:12;"></span>
      <span style="--i:24;"></span>
      <span style="--i:10;"></span>
      <span style="--i:14;"></span>
      <span style="--i:23;"></span>
      <span style="--i:18;"></span>
      <span style="--i:16;"></span>
      <span style="--i:19;"></span>
      <span style="--i:20;"></span>
      <span style="--i:22;"></span>
      <span style="--i:25;"></span>
      <span style="--i:18;"></span>
      <span style="--i:21;"></span>
      <span style="--i:15;"></span>
      <span style="--i:13;"></span>
      <span style="--i:26;"></span>
      <span style="--i:17;"></span>
      <span style="--i:13;"></span>
      <span style="--i:26;"></span>
      <span style="--i:11;"></span>
      <span style="--i:12;"></span>
      <span style="--i:24;"></span>
      <span style="--i:10;"></span>
      <span style="--i:14;"></span>
      <span style="--i:23;"></span>
      <span style="--i:18;"></span>
      <span style="--i:16;"></span>
      <span style="--i:19;"></span>
      <span style="--i:20;"></span>
      <span style="--i:22;"></span>
      <span style="--i:25;"></span>
      <span style="--i:18;"></span>
      <span style="--i:21;"></span>
      <span style="--i:15;"></span>
      <span style="--i:13;"></span>
      <span style="--i:26;"></span>
      <span style="--i:17;"></span>
      <span style="--i:13;"></span>
      <span style="--i:26;"></span>
    </div>
</div>

</body>
</html>