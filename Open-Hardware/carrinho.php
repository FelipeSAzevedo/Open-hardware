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














  <section class="container normal-section">
        <h2 class="section-title">Produtos</h2>

        <div class="products-container">
          <div class="movie-product">
            <strong class="product-title">Camiseta</strong>
            <!-- <br> -->
            <img src="images/produto1.png" alt="Camiseta" class="product-image">
            <div class="product-price-container">
              <span class="product-price">R$39,90</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>

          <div class="movie-product">
            <strong class="product-title">Miniatura</strong>
            <!-- <br> -->
            <img src="images/produto2.png" alt="Miniatura" class="product-image">
            <div class="product-price-container">
              <span class="product-price">R$69,90</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>
        </div>
      </section>




  
  <section class="container normal-section">
        <h2 class="section-title">Carrinho</h2>

        <table class="cart-table">
          <thead>
            <tr>
              <th class="table-head-item first-col">Item</th>
              <th class="table-head-item second-col">Preço</th>
              <th class="table-head-item third-col">Quantidade</th>
            </tr>
          </thead>

          <tbody>
            <!-- <tr class="cart-product">
              <td class="product-identification">
                <img src="images/produto2.png" alt="Miniatura" class="cart-product-image">
                <strong class="cart-product-title">Miniatura</strong>
              </td>
              <td>
                <span class="cart-product-price">R$69,90</span>
              </td>
              <td>
                <input type="number" value="2" min="0" class="product-qtd-input">
                <button type="button" class="remove-product-button">Remover</button>
              </td>
            </tr>
            <tr class="cart-product">
              <td class="product-identification">
                <img src="images/poster3.png" alt="Poster 3" class="cart-product-image">
                <strong class="cart-product-title">Poster 3</strong>
              </td>
              <td>
                <span class="cart-product-price">R$19,99</span>
              </td>
              <td>
                <input type="number" value="1" min="0" class="product-qtd-input">
                <button type="button" class="remove-product-button">Remover</button>
              </td>
            </tr> -->
          </tbody>

          <tfoot>
            <tr>
              <td colspan="3" class="cart-total-container">
                <strong>Total</strong>
                <span>R$0,00</span>
              </td>
            </tr>
          </tfoot>
        </table>

        <button type="button" class="purchase-button">Finalizar Compra</button>
      </section>






















    <footer class="rodape">
        <a href="readme.php" class="footer_link">
            <p>Sobre a página
        </a>
            </p>
    </footer>
  </body>
</html>
