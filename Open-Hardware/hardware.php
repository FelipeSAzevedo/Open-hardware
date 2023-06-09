
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

      <a href="hardware.html" class="cabecalho_link">
        <p>Hardware</p>
      </a>

      <?php
      
      if(!isset($_SESSION)) {
          session_start();
      }

      if(!isset($_SESSION['id_usuario'])) {
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

    <div class="produtos">
        <div class="produto">
            <img src="./images/hardware/Fonte XPG Core Reactor 850W 80 Plus.png">
            <p class="descricao">Fonte XPG Core Reactor 850W 80 Plus</p>
            <p>R$: 29.90</p>
            <a href="carrinho_adicionar.php?
              id_produto=1&
              nome=Fonte XPG Core Reactor 850W 80 Plus&
              preco=29.90">
              <button class="comprar_btn_pai" id="add_carrinho">
                <div class="comprar_btn_filho">
                  <svg width="20" height="20" viewBox="0 0 23 22" fill="none" xmlns="https://www.w3.org/2000/svg" class="icone"><path d="M7.09977 17.6C5.88981 17.6 4.91085 18.59 4.91085 19.8C4.91085 21.01 5.88981 22 7.09977 22C8.30973 22 9.2997 21.01 9.2997 19.8C9.2997 18.59 8.30973 17.6 7.09977 17.6ZM0.5 0V2.2H2.69992L6.65979 10.549L5.17484 13.244C4.99885 13.552 4.89985 13.915 4.89985 14.3C4.89985 15.51 5.88981 16.5 7.09977 16.5H20.2993V14.3H7.56176C7.40776 14.3 7.28677 14.179 7.28677 14.025L7.31977 13.893L8.30973 12.1H16.5044C17.3294 12.1 18.0554 11.649 18.4294 10.967L22.3672 3.828C22.458 3.66013 22.5037 3.47158 22.4998 3.28078C22.4959 3.08998 22.4426 2.90346 22.345 2.73943C22.2475 2.5754 22.1091 2.43947 21.9433 2.34492C21.7776 2.25037 21.5901 2.20044 21.3993 2.2H5.13084L4.09688 0H0.5ZM18.0994 17.6C16.8894 17.6 15.9105 18.59 15.9105 19.8C15.9105 21.01 16.8894 22 18.0994 22C19.3094 22 20.2993 21.01 20.2993 19.8C20.2993 18.59 19.3094 17.6 18.0994 17.6Z" fill="#73c5e5" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #73c5e5;"></path></svg>
                </div>
                <div class="comprar_btn_filho">
                  <p class="comprar_btn_filho">Comprar</p>
                </div>
              </button>
            </a>
        </div>

        <div class="produto">
            <img src="./images/hardware/Placa Mãe MSI A520M-A PRO AMD AM4 mATX DDR4.png">
            <p class="descricao">Placa Mãe MSI A520M-A PRO AMD AM4 mATX DDR4</p>
            <p>R$: 449,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=2&
              nome=Placa Mãe MSI A520M-A PRO AMD AM4 mATX DDR4&
              preco=449.99">
              <button class="comprar_btn_pai" id="add_carrinho">
                <div class="comprar_btn_filho">
                  <svg width="20" height="20" viewBox="0 0 23 22" fill="none" xmlns="https://www.w3.org/2000/svg" class="icone"><path d="M7.09977 17.6C5.88981 17.6 4.91085 18.59 4.91085 19.8C4.91085 21.01 5.88981 22 7.09977 22C8.30973 22 9.2997 21.01 9.2997 19.8C9.2997 18.59 8.30973 17.6 7.09977 17.6ZM0.5 0V2.2H2.69992L6.65979 10.549L5.17484 13.244C4.99885 13.552 4.89985 13.915 4.89985 14.3C4.89985 15.51 5.88981 16.5 7.09977 16.5H20.2993V14.3H7.56176C7.40776 14.3 7.28677 14.179 7.28677 14.025L7.31977 13.893L8.30973 12.1H16.5044C17.3294 12.1 18.0554 11.649 18.4294 10.967L22.3672 3.828C22.458 3.66013 22.5037 3.47158 22.4998 3.28078C22.4959 3.08998 22.4426 2.90346 22.345 2.73943C22.2475 2.5754 22.1091 2.43947 21.9433 2.34492C21.7776 2.25037 21.5901 2.20044 21.3993 2.2H5.13084L4.09688 0H0.5ZM18.0994 17.6C16.8894 17.6 15.9105 18.59 15.9105 19.8C15.9105 21.01 16.8894 22 18.0994 22C19.3094 22 20.2993 21.01 20.2993 19.8C20.2993 18.59 19.3094 17.6 18.0994 17.6Z" fill="#73c5e5" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #73c5e5;"></path></svg>
                </div>
                <div class="comprar_btn_filho">
                  <p class="comprar_btn_filho">Comprar</p>
                </div>
              </button>
            </a>
        </div>

        <div class="produto">
            <img src="./images/hardware/Memória Kingston Fury Beast 8GB 3200MHz DDR4.png">
            <p class="descricao">Memória Kingston Fury Beast 8GB 3200MHz DDR4</p>
            <p>R$: 159,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=3&
              nome=Memória Kingston Fury Beast 8GB 3200MHz DDR4&
              preco=159.99">
              <button class="comprar_btn_pai" id="add_carrinho">
                <div class="comprar_btn_filho">
                  <svg width="20" height="20" viewBox="0 0 23 22" fill="none" xmlns="https://www.w3.org/2000/svg" class="icone"><path d="M7.09977 17.6C5.88981 17.6 4.91085 18.59 4.91085 19.8C4.91085 21.01 5.88981 22 7.09977 22C8.30973 22 9.2997 21.01 9.2997 19.8C9.2997 18.59 8.30973 17.6 7.09977 17.6ZM0.5 0V2.2H2.69992L6.65979 10.549L5.17484 13.244C4.99885 13.552 4.89985 13.915 4.89985 14.3C4.89985 15.51 5.88981 16.5 7.09977 16.5H20.2993V14.3H7.56176C7.40776 14.3 7.28677 14.179 7.28677 14.025L7.31977 13.893L8.30973 12.1H16.5044C17.3294 12.1 18.0554 11.649 18.4294 10.967L22.3672 3.828C22.458 3.66013 22.5037 3.47158 22.4998 3.28078C22.4959 3.08998 22.4426 2.90346 22.345 2.73943C22.2475 2.5754 22.1091 2.43947 21.9433 2.34492C21.7776 2.25037 21.5901 2.20044 21.3993 2.2H5.13084L4.09688 0H0.5ZM18.0994 17.6C16.8894 17.6 15.9105 18.59 15.9105 19.8C15.9105 21.01 16.8894 22 18.0994 22C19.3094 22 20.2993 21.01 20.2993 19.8C20.2993 18.59 19.3094 17.6 18.0994 17.6Z" fill="#73c5e5" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #73c5e5;"></path></svg>
                </div>
                <div class="comprar_btn_filho">
                  <p class="comprar_btn_filho">Comprar</p>
                </div>
              </button>
            </a>
        </div>

        <div class="produto">
            <img src="./images/hardware/RTX 4060 Ti Ventus MSI NVIDIA GeForce, 8 GB GDDR6.png">
            <p class="descricao">RTX 4060 Ti Ventus MSI NVIDIA GeForce, 8 GB GDDR6</p>
            <p>R$: 3.199,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=4&
              nome=RTX 4060 Ti Ventus MSI NVIDIA GeForce, 8 GB GDDR6&
              preco=3199.99">
              <button class="comprar_btn_pai" id="add_carrinho">
                <div class="comprar_btn_filho">
                  <svg width="20" height="20" viewBox="0 0 23 22" fill="none" xmlns="https://www.w3.org/2000/svg" class="icone"><path d="M7.09977 17.6C5.88981 17.6 4.91085 18.59 4.91085 19.8C4.91085 21.01 5.88981 22 7.09977 22C8.30973 22 9.2997 21.01 9.2997 19.8C9.2997 18.59 8.30973 17.6 7.09977 17.6ZM0.5 0V2.2H2.69992L6.65979 10.549L5.17484 13.244C4.99885 13.552 4.89985 13.915 4.89985 14.3C4.89985 15.51 5.88981 16.5 7.09977 16.5H20.2993V14.3H7.56176C7.40776 14.3 7.28677 14.179 7.28677 14.025L7.31977 13.893L8.30973 12.1H16.5044C17.3294 12.1 18.0554 11.649 18.4294 10.967L22.3672 3.828C22.458 3.66013 22.5037 3.47158 22.4998 3.28078C22.4959 3.08998 22.4426 2.90346 22.345 2.73943C22.2475 2.5754 22.1091 2.43947 21.9433 2.34492C21.7776 2.25037 21.5901 2.20044 21.3993 2.2H5.13084L4.09688 0H0.5ZM18.0994 17.6C16.8894 17.6 15.9105 18.59 15.9105 19.8C15.9105 21.01 16.8894 22 18.0994 22C19.3094 22 20.2993 21.01 20.2993 19.8C20.2993 18.59 19.3094 17.6 18.0994 17.6Z" fill="#73c5e5" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #73c5e5;"></path></svg>
                </div>
                <div class="comprar_btn_filho">
                  <p class="comprar_btn_filho">Comprar</p>
                </div>
              </button>
            </a>
        </div>
      
        <div class="produto">
            <img src="./images/hardware/Memória XPG Gammix D10 8GB 3200MHz DDR4.png">
            <p class="descricao">Memória XPG Gammix D10 8GB 3200MHz DDR4</p>
            <p>R$: 139,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=5&
              nome=Memória XPG Gammix D10 8GB 3200MHz DDR4&
              preco=139.99">
              <button class="comprar_btn_pai" id="add_carrinho">
                <div class="comprar_btn_filho">
                  <svg width="20" height="20" viewBox="0 0 23 22" fill="none" xmlns="https://www.w3.org/2000/svg" class="icone"><path d="M7.09977 17.6C5.88981 17.6 4.91085 18.59 4.91085 19.8C4.91085 21.01 5.88981 22 7.09977 22C8.30973 22 9.2997 21.01 9.2997 19.8C9.2997 18.59 8.30973 17.6 7.09977 17.6ZM0.5 0V2.2H2.69992L6.65979 10.549L5.17484 13.244C4.99885 13.552 4.89985 13.915 4.89985 14.3C4.89985 15.51 5.88981 16.5 7.09977 16.5H20.2993V14.3H7.56176C7.40776 14.3 7.28677 14.179 7.28677 14.025L7.31977 13.893L8.30973 12.1H16.5044C17.3294 12.1 18.0554 11.649 18.4294 10.967L22.3672 3.828C22.458 3.66013 22.5037 3.47158 22.4998 3.28078C22.4959 3.08998 22.4426 2.90346 22.345 2.73943C22.2475 2.5754 22.1091 2.43947 21.9433 2.34492C21.7776 2.25037 21.5901 2.20044 21.3993 2.2H5.13084L4.09688 0H0.5ZM18.0994 17.6C16.8894 17.6 15.9105 18.59 15.9105 19.8C15.9105 21.01 16.8894 22 18.0994 22C19.3094 22 20.2993 21.01 20.2993 19.8C20.2993 18.59 19.3094 17.6 18.0994 17.6Z" fill="#73c5e5" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #73c5e5;"></path></svg>
                </div>
                <div class="comprar_btn_filho">
                  <p class="comprar_btn_filho">Comprar</p>
                </div>
              </button>
            </a>
        </div>

        <div class="produto">
            <img src="./images/hardware/Processador AMD Ryzen 5 4600G 3.7GHz.png">
            <p class="descricao">Processador AMD Ryzen 5 4600G 3.7GHz</p>
            <p>R$: 149.99</p>
            <a href="carrinho_adicionar.php?
              id_produto=6&
              nome=Processador AMD Ryzen 5 4600G 3.7GHz&
              preco=149.99">
              <button class="comprar_btn_pai" id="add_carrinho">
                <div class="comprar_btn_filho">
                  <svg width="20" height="20" viewBox="0 0 23 22" fill="none" xmlns="https://www.w3.org/2000/svg" class="icone"><path d="M7.09977 17.6C5.88981 17.6 4.91085 18.59 4.91085 19.8C4.91085 21.01 5.88981 22 7.09977 22C8.30973 22 9.2997 21.01 9.2997 19.8C9.2997 18.59 8.30973 17.6 7.09977 17.6ZM0.5 0V2.2H2.69992L6.65979 10.549L5.17484 13.244C4.99885 13.552 4.89985 13.915 4.89985 14.3C4.89985 15.51 5.88981 16.5 7.09977 16.5H20.2993V14.3H7.56176C7.40776 14.3 7.28677 14.179 7.28677 14.025L7.31977 13.893L8.30973 12.1H16.5044C17.3294 12.1 18.0554 11.649 18.4294 10.967L22.3672 3.828C22.458 3.66013 22.5037 3.47158 22.4998 3.28078C22.4959 3.08998 22.4426 2.90346 22.345 2.73943C22.2475 2.5754 22.1091 2.43947 21.9433 2.34492C21.7776 2.25037 21.5901 2.20044 21.3993 2.2H5.13084L4.09688 0H0.5ZM18.0994 17.6C16.8894 17.6 15.9105 18.59 15.9105 19.8C15.9105 21.01 16.8894 22 18.0994 22C19.3094 22 20.2993 21.01 20.2993 19.8C20.2993 18.59 19.3094 17.6 18.0994 17.6Z" fill="#73c5e5" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #73c5e5;"></path></svg>
                </div>
                <div class="comprar_btn_filho">
                  <p class="comprar_btn_filho">Comprar</p>
                </div>
              </button>
            </a>
        </div>

        <div class="produto">
            <img src="./images/hardware/SSD 500 GB Kingston NV2 M.2 2280 PCIe NVMe.png">
            <p class="descricao">SSD 500 GB Kingston NV2 M.2 2280 PCIe NVMe</p>
            <p>R$: 229,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=7&
              nome=SSD 500 GB Kingston NV2 M.2 2280 PCIe NVMe&
              preco=229.99">
              <button class="comprar_btn_pai" id="add_carrinho">
                <div class="comprar_btn_filho">
                  <svg width="20" height="20" viewBox="0 0 23 22" fill="none" xmlns="https://www.w3.org/2000/svg" class="icone"><path d="M7.09977 17.6C5.88981 17.6 4.91085 18.59 4.91085 19.8C4.91085 21.01 5.88981 22 7.09977 22C8.30973 22 9.2997 21.01 9.2997 19.8C9.2997 18.59 8.30973 17.6 7.09977 17.6ZM0.5 0V2.2H2.69992L6.65979 10.549L5.17484 13.244C4.99885 13.552 4.89985 13.915 4.89985 14.3C4.89985 15.51 5.88981 16.5 7.09977 16.5H20.2993V14.3H7.56176C7.40776 14.3 7.28677 14.179 7.28677 14.025L7.31977 13.893L8.30973 12.1H16.5044C17.3294 12.1 18.0554 11.649 18.4294 10.967L22.3672 3.828C22.458 3.66013 22.5037 3.47158 22.4998 3.28078C22.4959 3.08998 22.4426 2.90346 22.345 2.73943C22.2475 2.5754 22.1091 2.43947 21.9433 2.34492C21.7776 2.25037 21.5901 2.20044 21.3993 2.2H5.13084L4.09688 0H0.5ZM18.0994 17.6C16.8894 17.6 15.9105 18.59 15.9105 19.8C15.9105 21.01 16.8894 22 18.0994 22C19.3094 22 20.2993 21.01 20.2993 19.8C20.2993 18.59 19.3094 17.6 18.0994 17.6Z" fill="#73c5e5" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #73c5e5;"></path></svg>
                </div>
                <div class="comprar_btn_filho">
                  <p class="comprar_btn_filho">Comprar</p>
                </div>
              </button>
            </a>
        </div>

        <div class="produto">
            <img src="./images/hardware/SSD 240 GB Kingston A400 SATA Leitura 500MBs e Gravação 350MBs.png">
            <p class="descricao">SSD 240 GB Kingston A400 SATA Leitura 500MBs e Gravação 350MBs</p>
            <p>R$: 127,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=8&
              nome=SSD 240 GB Kingston A400 SATA Leitura 500MBs e Gravação 350MBs&
              preco=127.99">
              <button class="comprar_btn_pai" id="add_carrinho">
                <div class="comprar_btn_filho">
                  <svg width="20" height="20" viewBox="0 0 23 22" fill="none" xmlns="https://www.w3.org/2000/svg" class="icone"><path d="M7.09977 17.6C5.88981 17.6 4.91085 18.59 4.91085 19.8C4.91085 21.01 5.88981 22 7.09977 22C8.30973 22 9.2997 21.01 9.2997 19.8C9.2997 18.59 8.30973 17.6 7.09977 17.6ZM0.5 0V2.2H2.69992L6.65979 10.549L5.17484 13.244C4.99885 13.552 4.89985 13.915 4.89985 14.3C4.89985 15.51 5.88981 16.5 7.09977 16.5H20.2993V14.3H7.56176C7.40776 14.3 7.28677 14.179 7.28677 14.025L7.31977 13.893L8.30973 12.1H16.5044C17.3294 12.1 18.0554 11.649 18.4294 10.967L22.3672 3.828C22.458 3.66013 22.5037 3.47158 22.4998 3.28078C22.4959 3.08998 22.4426 2.90346 22.345 2.73943C22.2475 2.5754 22.1091 2.43947 21.9433 2.34492C21.7776 2.25037 21.5901 2.20044 21.3993 2.2H5.13084L4.09688 0H0.5ZM18.0994 17.6C16.8894 17.6 15.9105 18.59 15.9105 19.8C15.9105 21.01 16.8894 22 18.0994 22C19.3094 22 20.2993 21.01 20.2993 19.8C20.2993 18.59 19.3094 17.6 18.0994 17.6Z" fill="#73c5e5" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #73c5e5;"></path></svg>
                </div>
                <div class="comprar_btn_filho">
                  <p class="comprar_btn_filho">Comprar</p>
                </div>
              </button>
            </a>
        </div>

    </div>
    
    <footer class="rodape">
      <a href="readme.php" class="footer_link">
        <p>Sobre a página</p>
      </a>

    </footer>
</body>

</html>