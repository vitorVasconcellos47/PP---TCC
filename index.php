<html>
<head>
  <meta charset="utf-8"> 
  <title> Home </title>
  <link rel="stylesheet" href="_css/header.css">
  <link rel="stylesheet" href="_css/background.css">
  <link rel="stylesheet" href="_css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="_js/conta.js"></script>
</head>
<body>
  
<!-- Cabeçalho -->

<div class="nav">
  <div class="logo"> iLume </div>
  <div class="menu">
    <ul>
      <li><a href="#" style="color:#9932F5"> Home </a></li>
      <li><a href="conta.php" > Conta </a></li>
      <li><a href="artigos.php"> Artigos </a></li>
      <li><a href="equipe.php"> Equipe </a></li>
    </ul>
  </div>
</div>

<!-- Mapa -->

<div class="mapBox">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.5072090598214!2d-51.18192658487752!3d-23.26101295645456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94eb5b3c89a38993%3A0xbb54ac4c6d64d4f9!2sZona%20Norte%20-%20Londrina%2C%20PR!5e0!3m2!1spt-BR!2sbr!4v1655444317138!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div> 

<!-- Gráfico polarArea -->

<div class="graphBox">
  <div class="box"> <h2> Motivos </h2> <canvas id="myChart"></canvas></div>

<!-- Gráfico bar -->

  <div class="box"> <h2> Bairros </h2> <canvas id="myChart2"></canvas></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
<script src="_js/my_chart.js"></script>

<!-- Feedback -->

<div class="containerBox">
<container>
  <div class="container">
    <div class="user">
      <div class="feedBx">
        <div>
          <h2> Feedback </h2>
          <input type="text" id="feeduser" placeholder="Nome de usuário">
          <input type="text" id="feedemail" placeholder="Endereço de email">
          <textarea type="text" id="feedcomment" style="resize: none" placeholder="Comentário"></textarea>
            <input type="button" class="light" value="Enviar" onclick="feedback()">
            <p class="signup"> Texto que eu esqueci o que ia colocar... </p>
            <p class="signup"> Ao enviar as denúncias, iremos atualizar nosso sistema! </p>     
        </div>
      </div>
    </div>
  </div>
</container>

<!-- Formulário de denúncia -->

<div class="center">
<container>
  <div class="container">
    <div class="user">
      <div class="formBx">
        <div>
          <h2> Formulário de denúncia </h2>
          <input type="text" id="denuser" placeholder="Nome de usuário">
          <input type="text" id="denemail" placeholder="Endereço de email">
          <input type="text" id="dencep" placeholder="CEP denunciado" maxlength="9" onkeypress="return event.charCode >= 48 && event.charCode <= 57" onkeyup="maskcep()">
          <input type="text" id="denpoint"  placeholder="Ponto de referência">
          <textarea type="text" style="resize: none" placeholder="Comentário (opcional)"></textarea>
            <input type="button" class="light" value="Denunciar" onclick="denunciar()">
            <p class="signup"> Anexados devem apresentar qualidades gráficas e audio visuais decentes! </p>
        </div>
      </div>
    </div>
  </div>
</container>
</div>

<!-- Carregador de arquivos -->

<div class="archive">
          <header> Carregador de arquivos </header>
          <form action="#">
          <input type="file" id="denarchive" class="file-input" name="file" hidden>
          <i class="fas fa-cloud-upload-alt"></i>
          <p> Procurar Arquivo para Carregar </p>
          </form>
            <section class="progress-area"></section>
            <section class="uploaded-area"></section>
  </div>
            <script src="_js/script.js"></script>
</div>

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