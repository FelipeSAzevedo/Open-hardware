
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
      <div class="conta_usuario">

      <?php
      
      if(!isset($_SESSION)) {
          session_start();
      }

      if(!isset($_SESSION['id'])) {
        ?>
        <div class="nome_usuario">
            <p class="nome_usuario">Bem vindo: Convidado 
              <a href="profile.php"> <img id="login_image" src="./images/6681204.png" class="nome_usuario"></a>
              <a href="carrinho.php"> <img id="login_image" src="./images/1057168.png" class="nome_usuario"></a>
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
    </div>
  </header>

  <body>
  
    <div class="ofertas">
      <div class="oferta">
      <img src="./images/kit upgrade/Kit Upgrade Processador AMD Ryzen 5 5600G Placa-Mãe A520m Memória 16GB.png">
        <p>Ryzen 5 5600G Placa-Mãe A520m Memória 16GB</p>
        <p class="preco_antigo">R$ 2.789,59</p>
        <p>R$: 2.110,48</p>
      </div>

      <div class="oferta">
      <img src="./images/kit upgrade/Kit Upgrade Neologic Nli84048 AMD Ryzen 5 4500 Placa Mãe A320m Prime Asus.png">
        <p>AMD Ryzen 5 4500 Placa Mãe A320m Prime Asus</p>
        <p class="preco_antigo">R$ 1.789,59</p>
        <p>R$: 1.489,59</p>
      </div>

      <div class="oferta">
      <img src="./images/kit upgrade/Processador Intel Core I5 10400 + Placa-Mãe Asrock H510m-Hvs + Memória RAM 16GB.png">
        <p>I5 10400 + Placa-Mãe Asrock H510m-Hvs + Memória RAM 16GB</p>
        <p class="preco_antigo">R$ 2.548,84</p>
        <p>R$: 2.048,84</p>
      </div>

      <div class="oferta">
        <img
          src="./images/perifericos/Headset Gamer Havit Drivers 53mm Microfone Plugável.png"
        />
        <p>
          Headset Gamer Havit, Drivers 53mm, Microfone Plugável, P2, PC, PS4,
          XBOX ONE, Preto - HV-H2002D
        </p>
        <p class="preco_antigo">R$ 248,65</p>
        <p>R$ 169,99</p>
      </div>

      <div class="oferta">
        <img
          src="./images/hardware/Placa Mãe MSI A520M-A PRO AMD AM4 mATX DDR4.png"
        />
        <p>Placa Mãe MSI A520M-A PRO, AMD AM4, mATX, DDR4</p>
        <p class="preco_antigo">R$ 588,22</p>
        <p>R$ 419,99</p>
      </div>

      <div class="oferta">
      <img src="./images/perifericos/Mouse Gamer Redragon Cobra Chroma RGB.png">
            <p>Mouse Gamer Redragon Cobra Chroma RGB</p>
        <p class="preco_antigo">R$ 211,75</p>
        <p>R$: 104,99</p>
      </div>

      <div class="oferta">
      <img src="./images/kit upgrade/Kit Upgrade Processador AMD Ryzen 5 5600G Placa-Mãe A520m Memória 16GB.png">
            <p>Ryzen 5 5600G Placa-Mãe A520m Memória 16GB</p>
        <p class="preco_antigo">R$ 2.510,48</p>
        <p>R$: 2.110,48</p>
      </div>

      <div class="oferta">
      <img src="./images/hardware/Placa Mãe MSI A520M-A PRO AMD AM4 mATX DDR4.png">
            <p>Placa Mãe MSI A520M-A PRO AMD AM4 mATX DDR4</p>
        <p class="preco_antigo">R$ 699,99</p>
        <p>R$ 499,99</p>
      </div>
    </div>

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
    </div class="produtos">
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
