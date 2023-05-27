
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
        </div>
        <?php
      }
      ?>

    </div>
  </header>

<body>
    <div class="produtos">
        <div class="produto">
            <img src="https://io.convertiez.com.br/m/drogal/shop/products/images/4660046/medium/nutriwheyproteinbaunilha907g_25845.jpg">
            <p>Whey protenin (907g)</p>
            <p>R$: 29.90</p>
        </div>

        <div class="produto">
            <img src="https://blackskullusa.vtexassets.com/arquivos/ids/155567/985587_creatine-creatina-monohidratada-300g_z1_637145933532537606.jpg?v=1770087606">
            <p>Creatina (300g)</p>
            <p>R$: 149.99</p>
        </div>

        <div class="produto">
            <img src="https://www.bassopancotte.com.br/wp-content/uploads/2016/01/28615-1.jpg">
            <p>Testo pra cavalo</p>
            <p>R$: 14.99</p>
        </div>

        <div class="produto">
            <img src="https://www.oficialfarma.com.br/media/catalog/product/1/8/1833.jpg?width=85&height=85&canvas=85,85&optimize=medium&bg-color=255,255,255&fit=bounds">
            <p>Testo pra gente</p>
            <p>R$: 29.90</p>
        </div>
    </div>
    <div class="produtos">
        <div class="produto">
            <img src="https://io.convertiez.com.br/m/drogal/shop/products/images/4660046/medium/nutriwheyproteinbaunilha907g_25845.jpg">
            <p>Whey protenin (907g)</p>
            <p>R$: 29.90</p>
        </div>

        <div class="produto">
            <img src="https://blackskullusa.vtexassets.com/arquivos/ids/155567/985587_creatine-creatina-monohidratada-300g_z1_637145933532537606.jpg?v=1770087606">
            <p>Creatina (300g)</p>
            <p>R$: 149.99</p>
        </div>

        <div class="produto">
            <img src="https://www.bassopancotte.com.br/wp-content/uploads/2016/01/28615-1.jpg">
            <p>Testo pra cavalo</p>
            <p>R$: 14.99</p>
        </div>

        <div class="produto">
            <img src="https://www.oficialfarma.com.br/media/catalog/product/1/8/1833.jpg?width=85&height=85&canvas=85,85&optimize=medium&bg-color=255,255,255&fit=bounds">
            <p>Testo pra gente</p>
            <p>R$: 29.90</p>
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