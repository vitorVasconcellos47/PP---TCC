<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Conta</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='_css/home.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='_css/header.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='_css/background.css'>
  
  <script src='_js/home.js'></script>
</head>
<body>
  <div class="nav">
    <div class="logo">
      iLume
    </div>
    <div class="menu">
      <ul>
        <li><a href="#" style="color:rgb(64,156,255)">Home</a></li>
        <li><a href="conta.php">Conta</a></li>
        <li><a href="artigos.php">Artigos</a></li>
        <li><a href="equipe.php">Equipe</a></li>
        <li><a href="suporte.php">Suporte</a></li>
      </ul>
    </div>
  </div>

  <!-- <div id="login-container">

  </div> -->










  
  <section>
  <div class="container">
    <div class="user signinBx">
      <div class="formBx">
        <form>
          <h2>Formulário de denúncia</h2>

          <input name="name" id="name" type="text" placeholder="Apelido">
          
          <input name="cep" id="cep" type="text" placeholder="CEP da denúncia" autocomplete="off" maxlength="9" onkeyup="mascara_cep()" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
        
          <textarea name="msg" id="msg" type="text" style="resize: none" placeholder="Mensagem"></textarea>
        
          <input type="submit" value="Denunciar" onclick="verificar()">
          
          <p class="signup">Ao enviar a denúncia, iremos atualizar nosso sistema!</p>
        </form>
      </div>
    </div>
</section>
</div>

  

 


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





<!-- 
   
  <h2 id="anchor_denuncia4">Formulário de Denúncia</h2> <br><br>

      <div id="centro">
        <input class="input" name="cep" id="cep" placeholder="CEP (local denunciado)" autocomplete="off" maxlength="9" onkeyup="mascara_cep()" onkeypress='return event.charCode >= 48 && event.charCode <= 57'> 
      </div>

      <div id="centro">
          <input class="input"type="text" name="pr" id="pr" placeholder="Ponto de referência" maxlength="100"> 
      </div>

      <div id="centro" >
          <select id="ctg" >
              <option selected disabled>Categorias</option>
              <option>Vandalismo</option>
              <option>Furto</option>
              <option>Climático</option>
              <option>Batida</option>
          </select>
      </div><br> 

      <div>
          <input id="file" type="file"> 
      </div> 

       <div id="centro">
          <label class="movimentação"><input id="submit" type="submit" class="ef-glow" class="align" value="denunciar"  onkeypress="$(this).mask('00000-000')" onclick="verificar()"></label>
       </div>
</div>
</body>
</html> -->
