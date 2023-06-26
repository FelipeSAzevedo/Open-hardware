
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
            <img src="./images/kit upgrade/Amd Ryzen 5 5600x + Gigabyte B450m Gaming + Memória 8GB .png">
            <p>Amd Ryzen 5 5600x + Gigabyte B450m Gaming + Memória 8GB</p>
            <p>R$: 2.110,48</p>
        </div>

        <div class="produto">
            <img src="./images/kit upgrade/Intel I5 OEM 6ª Geração H110 + Memória 8GB .png">
            <p>Intel I5 OEM 6ª Geração H110 + Memória 8GB</p>
            <p>R$: 1.078,20</p>
        </div>

        <div class="produto">
            <img src="./images/kit upgrade/Kit Upgrade Neologic Nli84048 AMD Ryzen 5 4500 Placa Mãe A320m Prime Asus.png">
            <p>AMD Ryzen 5 4500 Placa Mãe A320m Prime Asus</p>
            <p>R$: 1.489,59</p>
        </div>

        <div class="produto">
            <img src="./images/kit upgrade/Kit Upgrade Kaikora Intel Processador I5 10400F + Memória 16GB DDR4.png">
            <p>Intel Processador I5 10400F + Memória 16GB DDR4</p>
            <p>R$: 2.166,00</p>
        </div>
    </div>
        <div class="produtos">

        <div class="produto">
            <img src="./images/kit upgrade/Processador Intel Core I5 10400 + Placa-Mãe Asrock H510m-Hvs + Memória RAM 16GB.png">
            <p>I5 10400 + Placa-Mãe Asrock H510m-Hvs + Memória RAM 16GB</p>
            <p>R$: 2.048,84</p>
        </div>

        <div class="produto">
            <img src="./images/kit upgrade/Placa de vídeo NVIDIA GeForce GTX 1650 + Fonte Neologic ATX, 80 Plus Bronze.png">
            <p>GeForce GTX 1650 + Fonte Neologic ATX, 80 Plus Bronze</p>
            <p>R$: 2.576,01</p>
        </div>

        <div class="produto">
            <img src="./images/kit upgrade/Kit Upgrade Processador AMD Ryzen 5 5600G Placa-Mãe A520m Memória 16GB.png">
            <p>Ryzen 5 5600G Placa-Mãe A520m Memória 16GB</p>
            <p>R$: 2.110,48</p>
        </div>

        <div class="produto">
            <img src="./images/kit upgrade/Kit Upgrade Placa Mãe Asus Prime A320M-K ASUS  AMD RYZEN 5 PRO 4650G 8GB DDR 4.png">
            <p>Asus Prime A320M-K ASUS  AMD RYZEN 5 PRO 4650G 8GB DDR 4</p>
            <p>R$: 1.928,86</p>
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