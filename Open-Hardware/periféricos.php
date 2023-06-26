
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
  </head>
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
        <div class="nome_usuario">
            <p>Bem vindo: Convidado 
              <a href="profile.php"> <img id="login_image" src="./images/6681204.png"></a>
              <a href="carrinho.php"> <img id="login_image" src="./images/1057168.png"></a>
            </p>
      </div>
        <?php
      }
      else{
        ?>
        <div class="nome_usuario">
        <p>Bem vindo: <?php echo $_SESSION['nome']; ?> 
          <a href="profile.php"> <img id="login_image" src="./images/6681204.png"></a>
          <a href="carrinho.php"> <img id="login_image" src="./images/1057168.png"></a>
        </p>
        </div>
        <?php
      }
      ?>

    </div>
  </header>

<body>
    <div class="produtos">
        <div class="produto">
            <img src="./images/perifericos/Headset Gamer Havit Drivers 53mm Microfone Plugável.png">
            <p>Headset Gamer Havit Drivers 53mm Microfone Plugável</p>
            <p>R$: 169,99</p>
        </div>

        <div class="produto">
            <img src="./images/perifericos/Mouse Gamer Redragon Cobra Chroma RGB.png">
            <p>Mouse Gamer Redragon Cobra Chroma RGB</p>
            <p>R$: 104,99</p>
        </div>

        <div class="produto">
            <img src="./images/perifericos/Teclado Mecânico Gamer HyperX Alloy MKW100.png">
            <p>Teclado Mecânico Gamer HyperX Alloy MKW100</p>
            <p>R$: 319,99</p>
        </div>

        <div class="produto">
            <img src="./images/perifericos/Webcam Logitech C505  720P HD 30 FPS.png">
            <p>Webcam Logitech C505  720P HD 30 FPS</p>
            <p>R$: 159,99</p>
        </div>
    </div>

    <div class="produtos">
        <div class="produto">
            <img src="./images/perifericos/Mousepad Gamer Husky Gaming Avalanche.png">
            <p>Mousepad Gamer Husky Gaming Avalanche</p>
            <p>R$: 39,99</p>
        </div>

        <div class="produto">
            <img src="./images/perifericos/Headset Gamer HyperX Cloud Alpha S Blackout.png">
            <p>Headset Gamer HyperX Cloud Alpha S Blackout</p>
            <p>R$: 537,12</p>
        </div>

        <div class="produto">
            <img src="./images/perifericos/Gabinete Gamer Bluecase Mini Tower.png">
            <p>Gabinete Gamer Bluecase Mini Tower</p>
            <p>R$: 99,99</p>
        </div>

        <div class="produto">
            <img src="./images/perifericos/Fone de Ouvido Intra-Auricular Gamer HyperX.png">
            <p>Fone de Ouvido Intra-Auricular Gamer HyperX</p>
            <p>R$: 199,99</p>
        </div>
    </div>
    <footer class="rodape">
        <a href="readme.php" class="footer_link">
            <p>Sobre a página
        </a>
            </p>
    </footer>
</body>

</html>