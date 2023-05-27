
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Open Hardware</title>
    <link rel="icon" href="./images/Ohw-logo.svg-mini.png" />
    <link rel="stylesheet" href="style.css" />
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
        <p>Produtos periféricos</p>
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
            <p>Bem vindo: Convidado <a href="profile.php"> <img id="login_image" src="./images/6681204.png"></a></p>
      </div>
        <?php
      }
      else{
        ?>
        <div class="nome_usuario">
        <p>Bem vindo: <?php echo $_SESSION['nome']; ?> <a href="profile.php"> <img id="login_image" src="./images/6681204.png"></a></p>
        
        <?php
      }
      ?>


    </div>
  </header>

  <body>
    <div class="ofertas">
      <div class="oferta">
        <img src="./images/kit-upgrade-5-7600.jpg" />
        <p>Kit Upgrade AMD Ryzen 5 7600 + Placa Mãe Gigabyte B650 Gaming X</p>
        <p class="preco_antigo">R$4.997,65</p>
        <p>R$3.598,00</p>
      </div>

      <div class="oferta">
        <img
          src="https://img.terabyteshop.com.br/produto/g/kit-upgrade-amd-ryzen-5-4600g-placa-mae-biostar-b450mhp-16gb-ddr4_168421.png"
        />
        <p>
          Kit Upgrade AMD Ryzen 5 4600G + Placa Mãe Biostar B450MHP + 16GB DDR4
        </p>
        <p class="preco_antigo">R$ 2.574,00</p>
        <p>R$ 1.247,90</p>
      </div>

      <div class="oferta">
        <img src="./images/M711-1.webp" />
        <p>
          Mouse Gamer Redragon Cobra, Chroma RGB, 12400DPI, 7 Botões, Preto -
          M711 V2
        </p>
        <p class="preco_antigo">R$ 129,40</p>
        <p>R$ 104,99</p>
      </div>

      <div class="oferta">
        <img
          src="https://images.kabum.com.br/produtos/fotos/102770/headset-gamer-havit-drivers-53mm-hv-h2002d_headset-gamer-havit-drivers-53mm-hv-h2002d_1564056874_gg.jpg"
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
          src="https://images.kabum.com.br/produtos/fotos/280890/placa-mae-msi-a520m-a-pro-amd-am4-matx-ddr4_1646852577_gg.jpg"
        />
        <p>Placa Mãe MSI A520M-A PRO, AMD AM4, mATX, DDR4</p>
        <p class="preco_antigo">R$ 588,22</p>
        <p>R$ 419,99</p>
      </div>

      <div class="oferta">
        <img
          src="https://images.kabum.com.br/produtos/fotos/172365/memoria-kingston-fury-beast-8gb-3200mhz-ddr4-cl16-preto-kf432c16bb-8_1626270523_gg.jpg"
        />
        <p>
          Memória Kingston Fury Beast, 8GB, 3200MHz, DDR4, CL16, Preto -
          KF432C16BB/8
        </p>
        <p class="preco_antigo">R$ 211,75</p>
        <p>R$ 159,99</p>
      </div>

      <div class="oferta">
        <img
          src="https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/p/g/pg-ntn-rbw01.jpg"
        />
        <p>
          COMBO TECLADO ABNT2, MOUSE 8000DPI,
          MOUSEPAD MEDIO, HEADSET DRIVERS 50MM
        </p>
        <p class="preco_antigo">R$ 411,64</p>
        <p>R$199,90</p>
      </div>

      <div class="oferta">
        <img
          src="https://images.kabum.com.br/produtos/fotos/280944/placa-mae-msi-b560m-pro-e-lga-1200-matx-ddr4_1646832447_gg.jpg"
        />
        <p>Placa Mãe MSI B560M PRO-E, Intel LGA 1200, mATX, DDR4</p>
        <p class="preco_antigo">R$ 705,87</p>
        <p>R$ 499,99</p>
      </div>
    </div>

    <div class="produtos">
      <div class="produto">
        <img
          src="https://img.terabyteshop.com.br/produto/g/ryzen-3-4100-cooler-wraith-stealth_140033.png"
        />
        <p>
          Processador AMD Ryzen 3 4100 3.8GHz + Cooler AMD Wraith Stealth, Sem
          vídeo integrado
        </p>
        <p>R$ 459,00</p>
      </div>

      <div class="produto">
        <img
          src="https://img.terabyteshop.com.br/produto/g/placa-de-video-gigabyte-amd-radeon-rx-6600-eagle-8g-8gb-gddr6-fsr-ray-tracing_142715.png"
        />
        <p>
          Placa de Vídeo Gigabyte AMD Radeon RX 6600 EAGLE 8G, 8GB, GDDR6, FSR,
          Ray Tracing
        </p>
        <p>R$ 1.599,90</p>
      </div>

      <div class="produto">
        <img
          src="https://img.terabyteshop.com.br/produto/g/fonte-duex-500w-bivolt-black-dx-500fse_159689.jpg"
        />
        <p>Fonte Duex 500W, Bivolt, Black, DX 500FSE</p>
        <p>R$ 129,00</p>
      </div>

      <div class="produto">
        <img
          src="https://images.kabum.com.br/produtos/fotos/193637/memoria-kingston-fury-beast-rgb-16gb-3200mhz-ddr4-cl16-preto-kf432c16bba-16_1630956135_gg.jpg"
        />
        <p>
          Memória Kingston Fury Beast, RGB, 16GB, 3200MHz, DDR4, CL16, Preto -
          KF432C16BBA/16
        </p>
        <p>R$ 349,99</p>
      </div>
    </div>

    <div class="produtos">
      <div class="produto">
        <img
          src="https://http2.mlstatic.com/D_NQ_NP_847770-MLB54842847647_042023-O.webp"
        />
        <p>Kit Upgrade Gamer - Intel Core I5 3.4ghz + H61 + 8gb De Ram</p>
        <p>R$ 798,75</p>
      </div>

      <div class="produto">
        <img
          src="https://http2.mlstatic.com/D_NQ_NP_958204-MLU54959127897_042023-O.webp"
        />
        <p>Placa-mãe Gigabyte P/ Amd Am4 B450m Gaming 2xddr4 Matx</p>
        <p>R$ 639,00</p>
      </div>

      <div class="produto">
        <img
          src="https://http2.mlstatic.com/D_NQ_NP_846490-MLB69450894632_052023-O.webp"
        />
        <p>Kit Upgrade Core I5 + Placa Mãe + 8gb De Memoria + Nfe + Gar</p>
        <p>R$ 629,99</p>
      </div>

      <div class="produto">
        <img
          src="https://http2.mlstatic.com/D_NQ_NP_860181-MLB54244906838_032023-O.webp"
        />
        <p>Kit Upgrade I5 11400 + H510m + 16gb Ddr4 + Ssd 480gb M2</p>
        <p>R$ 2.799</p>
      </div>
    </div>

    <div class="produtos">
      <div class="produto">
        <img
          src="https://images.kabum.com.br/produtos/fotos/154112/pendrive-datatraveler-exodia-64gb-kingston-com-conexao-usb-3-2-preto-azul-dtx-64gb_1619115277_gg.jpg"
        />
        <p>
          Pen Drive DataTraveler Exodia 64GB Kingston com Conexão USB 3.2,
          Preto/Azul - DTX/64GB
        </p>
        <p>R$ 28,99</p>
      </div>

      <div class="produto">
        <img
          src="https://images.kabum.com.br/produtos/fotos/371586/teclado-mecanico-gamer-hyperx-alloy-mkw100-rgb-switch-red-full-size-layout-us-4p5e1aa-aba_1660832224_gg.jpg"
        />
        <p>
          Teclado Mecânico Gamer HyperX Alloy MKW100, RGB, Switch Red, Full
          Size, US, Preto - 4P5E1AA#ABA
        </p>
        <p>R$ 199,99</p>
      </div>

      <div class="produto">
        <img
          src="https://images.kabum.com.br/produtos/fotos/324516/gabinete-gamer-rise-mode-glass-06x-lateral-em-vidro-fume-e-frontal-em-vidro-temperado-preto-rm-ca-06x-fb_1660589149_gg.jpg"
        />
        <p>
          Gabinete Gamer Rise Mode Glass 06X, Mid Tower, Lateral em Vidro Fumê e
          Frontal em Vidro Temperado, Preto - RM-CA-06X-FB
        </p>
        <p></p>
        <p>R$ 199,99</p>
      </div>

      <div class="produto">
        <img
          src="https://images.kabum.com.br/produtos/fotos/134388/hub-usb-husky-technologies-500-4-portas_1630702272_gg.jpg"
        />
        <p>HUB USB Husky Technologies 500, 4 Portas - HTCC018</p>
        <p>R$ 59,99</p>
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
