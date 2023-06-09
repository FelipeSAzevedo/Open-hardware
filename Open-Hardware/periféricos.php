
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

      <a href="hardware.php" class="cabecalho_link">
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
            <img src="./images/perifericos/Headset Gamer Havit Drivers 53mm Microfone Plugável.png">
            <p class="descricao">Headset Gamer Havit Drivers 53mm Microfone Plugável</p>
            <p>R$: 169,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=9&
              nome=Headset Gamer Havit Drivers 53mm Microfone Plugável&
              preco=169.99">
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
            <img src="./images/perifericos/Mouse Gamer Redragon Cobra Chroma RGB.png">
            <p class="descricao">Mouse Gamer Redragon Cobra Chroma RGB</p>
            <p>R$: 104,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=10&
              nome=Mouse Gamer Redragon Cobra Chroma RGB&
              preco=104.99">
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
            <img src="./images/perifericos/Teclado Mecânico Gamer HyperX Alloy MKW100.png">
            <p class="descricao">Teclado Mecânico Gamer HyperX Alloy MKW100</p>
            <p>R$: 319,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=11&
              nome=Teclado Mecânico Gamer HyperX Alloy MKW100&
              preco=319.99">
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
            <img src="./images/perifericos/Webcam Logitech C505  720P HD 30 FPS.png">
            <p class="descricao">Webcam Logitech C505  720P HD 30 FPS</p>
            <p>R$: 159,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=12&
              nome=Webcam Logitech C505  720P HD 30 FPS&
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
            <img src="./images/perifericos/Mousepad Gamer Husky Gaming Avalanche.png">
            <p class="descricao">Mousepad Gamer Husky Gaming Avalanche</p>
            <p>R$: 39,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=13&
              nome=Mousepad Gamer Husky Gaming Avalanche&
              preco=39.99">
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
            <img src="./images/perifericos/Headset Gamer HyperX Cloud Alpha S Blackout.png">
            <p class="descricao">Headset Gamer HyperX Cloud Alpha S Blackout</p>
            <p>R$: 537,12</p>
            <a href="carrinho_adicionar.php?
              id_produto=14&
              nome=Headset Gamer HyperX Cloud Alpha S Blackout&
              preco=537.12">
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
            <img src="./images/perifericos/Gabinete Gamer Bluecase Mini Tower.png">
            <p class="descricao">Gabinete Gamer Bluecase Mini Tower</p>
            <p>R$: 99,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=15&
              nome=Gabinete Gamer Bluecase Mini Tower&
              preco=99.99">
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
            <img src="./images/perifericos/Fone de Ouvido Intra-Auricular Gamer HyperX.png">
            <p class="descricao">Fone de Ouvido Intra-Auricular Gamer HyperX</p>
            <p>R$: 199,99</p>
            <a href="carrinho_adicionar.php?
              id_produto=16&
              nome=Fone de Ouvido Intra-Auricular Gamer HyperX&
              preco=199.99">
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