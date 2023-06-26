
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

      <a href="hardware.html" class="cabecalho_link">
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
            <img src="./images/hardware/Fonte XPG Core Reactor 850W 80 Plus.png">
            <p>Fonte XPG Core Reactor 850W 80 Plus</p>
            <p>R$: 29.90</p>
        </div>

        <div class="produto">
            <img src="./images/hardware/Placa Mãe MSI A520M-A PRO AMD AM4 mATX DDR4.png">
            <p>Placa Mãe MSI A520M-A PRO AMD AM4 mATX DDR4</p>
            <p>R$: 449,99</p>
        </div>

        <div class="produto">
            <img src="./images/hardware/Memória Kingston Fury Beast 8GB 3200MHz DDR4.png">
            <p>Memória Kingston Fury Beast 8GB 3200MHz DDR4</p>
            <p>R$: 159,99</p>
        </div>

        <div class="produto">
            <img src="./images/hardware/RTX 4060 Ti Ventus MSI NVIDIA GeForce, 8 GB GDDR6.png">
            <p>RTX 4060 Ti Ventus MSI NVIDIA GeForce, 8 GB GDDR6</p>
            <p>R$: 3.199,99</p>
        </div>
    </div>
    <div class="produtos">
        <div class="produto">
            <img src="./images/hardware/Memória XPG Gammix D10 8GB 3200MHz DDR4.png">
            <p>Memória XPG Gammix D10 8GB 3200MHz DDR4</p>
            <p>R$: 139,99</p>
        </div>

        <div class="produto">
            <img src="./images/hardware/Processador AMD Ryzen 5 4600G 3.7GHz.png">
            <p>Processador AMD Ryzen 5 4600G 3.7GHz</p>
            <p>R$: 149.99</p>
        </div>

        <div class="produto">
            <img src="./images/hardware/SSD 500 GB Kingston NV2 M.2 2280 PCIe NVMe.png">
            <p>SSD 500 GB Kingston NV2 M.2 2280 PCIe NVMe</p>
            <p>R$: 229,99</p>
        </div>

        <div class="produto">
            <img src="./images/hardware/SSD 240 GB Kingston A400 SATA Leitura 500MBs e Gravação 350MBs.png">
            <p>SSD 240 GB Kingston A400 SATA Leitura 500MBs e Gravação 350MBs</p>
            <p>R$: 127,99</p>
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