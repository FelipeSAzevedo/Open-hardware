
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
            <img src="https://s1.static.brasilescola.uol.com.br/be/conteudo/images/sera-que-todo-produto-natural-nao-causa-danos-saude-5b86b1b01f257.jpg">
            <p>Chá de quebra pedra</p>
            <p>R$: 29.90</p>
        </div>

        <div class="produto">
            <img src="https://boasvendas.uatt.com.br/wp-content/uploads/2019/03/paolo-bendandi-652128-unsplash.jpg">
            <p>Pó magico</p>
            <p>R$: 149.99</p>
        </div>

        <div class="produto">
            <img src="https://londrinando.com/images/uploads/posts/phone/pexels-frans-van-heerden-625422.webp">
            <p>Grãos diversos</p>
            <p>R$: 14.99</p>
        </div>

        <div class="produto">
            <img src="https://amazoniasemfronteiras.com/wp-content/uploads/2020/12/1-comida-natural.jpg">
            <p>Frutas em geral</p>
            <p>R$: 29.90</p>
        </div>
    </div>
        <div class="produtos">

        <div class="produto">
            <img src="https://s1.static.brasilescola.uol.com.br/be/conteudo/images/sera-que-todo-produto-natural-nao-causa-danos-saude-5b86b1b01f257.jpg">
            <p>Chá de quebra pedra</p>
            <p>R$: 29.90</p>
        </div>

        <div class="produto">
            <img src="https://boasvendas.uatt.com.br/wp-content/uploads/2019/03/paolo-bendandi-652128-unsplash.jpg">
            <p>Pó magico</p>
            <p>R$: 149.99</p>
        </div>

        <div class="produto">
            <img src="https://londrinando.com/images/uploads/posts/phone/pexels-frans-van-heerden-625422.webp">
            <p>Grãos diversos</p>
            <p>R$: 14.99</p>
        </div>

        <div class="produto">
            <img src="https://amazoniasemfronteiras.com/wp-content/uploads/2020/12/1-comida-natural.jpg">
            <p>Frutas em geral</p>
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