
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Conta</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='_css/conta.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='_css/header.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='_css/background.css'>
  <script src='_js/conta.js'></script>
</head>
<body>
  <div class="nav">
    <div class="logo">
      iLume
    </div>
    <div class="menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#" style="color:rgb(64,156,255)">Conta</a></li>
        <li><a href="artigos.php">Artigos</a></li>
        <li><a href="equipe.php">Equipe</a></li>
        <li><a href="suporte.php">Suporte</a></li>
      </ul>
    </div>
  </div>

  <section>
  <div class="container">
    <div class="user signinBx">
      <div class="imgBx"><img src="_gallery/img1.jpeg"></div>
      <div class="formBx">
        <form>
          <h2>Entrar</h2>
          <input type="text" name="name" id="name" placeholder="Apelido">
          <input type="password" name="password" id="password" placeholder="Senha">
          <input type="button" value="Logar" onclick="verificar()">
        <p class="signup">Não tem uma conta criada? <a href="#" onclick="toggleForm()">Cadastre-se.</a></p>
        </form>
      </div>
    </div>

    <div class="user signupBx">
      <div class="formBx">
        <form>
          <h2>Criar uma conta</h2>
          <input type="text" name="name1" id="name1" placeholder="Apelido">
          <input type="text" name="email1" id="email1" placeholder="Endereço de email">
          <input type="password" name="password1" id="password1" placeholder="Crie sua senha">
          <input type="password" name="confirm1" id="confirm1" placeholder="Confirme sua senha">
          <input type="button" value="Cadastrar" onclick="verificar1()">
        <p class="signup">Já tem uma conta criada? <a href="#" onclick="toggleForm()">Logue-se.</a></p>
        </form>
      </div>
      <div class="imgBx"><img src="_gallery/img2.jpeg"></div>
    </div>
  </div>
</section>

<div class="parallax">
  <div class="container">
    <div class="bubbles">
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
</div>

</body>
</html>