<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Open Hardware</title>
    <link rel="icon" href="./images/Ohw-logo.svg-mini.png" />
    <link rel="stylesheet" href="style.css" />
    <script async src="./script.js"></script>
    <script async src="./loja.js"></script>
  </head>
  <body>
  <header>
    <div class="cabecalho">
      <a href="indice.php">
        <img id="logo" src="./images/Ohw-logo.svg.png" />
      </a>
      <a href="kit-upgrade.php" class="cabecalho_link">
        <p>Kit-Upgrade</p>
      </a>

      <a href="periféricos.php" class="cabecalho_link">
        <p>Periféricos</p>
      </a>

      <a href="hardware.php" class="cabecalho_link">
        <p>Hardware</p>
      </a>

      <?php
      
      if(!isset($_SESSION)) {
          session_start();
      }

      if(!isset($_SESSION['id'])) {
        ?>
        <div class="nome_usuario_item">
            <p>Bem vindo: Convidado </p>
              <a href="profile.php"> <img id="login_image" class="nome_usuario_item" src="./images/6681204.png"></a>
              <a href="carrinho.php"> <img id="login_image" class="nome_usuario_item" src="./images/1057168.png"></a>
        </div>
        <?php
      }
      else{
        ?>
        <div class="nome_usuario_item">
          <p>Bem vindo: <?php echo $_SESSION['nome']; ?> </p>
            <a href="profile.php"> <img id="login_image" class="nome_usuario_item" src="./images/6681204.png"></a>
            <a href="carrinho.php"> <img id="login_image" class="nome_usuario_item" src="./images/1057168.png"></a>
          
          </div>
        <?php
      }
      ?>


    </div>
  </header>

  <p class="painel">Bem vindo ao seu carrinho, <?php echo $_SESSION['nome']; ?>.</p>

    <footer class="rodape">
        <a href="readme.php" class="footer_link">
            <p>Sobre a página</p>
        </a>
    </footer>
  </body>
</html>
