
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
            <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQRMpDj347gvlA4_SYkVAeHB9VYRJe_Vxzpa7lYPRnNUK6H5sKKHqbj8DmVzHDmOGIbVw0Hi3P4N_tIWNKs21oYcXqwPEjit1w7qnotVR1NOi9cXES57mji7Hy_q7vlnslcMPA&usqp=CAc">
            <p>Copo de bambu</p>
            <p>R$: 29.90</p>
        </div>

        <div class="produto">
            <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ3qnUEG5bHMjOB8eqK_FnqzS8GKhIZe93FcCJ4ZajDXRzrnV7UZwFqhoUSdj1BLuF8Yin1iQ0h1xuznHpvWKrpO3q8Dzjv10_AmaX-q4GLJNuCR7vYq_YKZU8pyj83bTbhhzM&usqp=CAc">
            <p>Esponja ecologica</p>
            <p>R$: 149.99</p>
        </div>

        <div class="produto">
            <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQgd-EsgogBL9iGM2IV8PA_WOfGpRpZ2kqjnkeAIUtD_o2YmeYgiBNUus3jPNZ4mp7wne62hFv9_MtPOdLbesKY1nsC-f7uECKBbUyUj2U6cAtaDLhAV58CWBPrtEUvqiB4iA&usqp=CAc">
            <p>Escova de prato</p>
            <p>R$: 14.99</p>
        </div>

        <div class="produto">
            <img src="https://img.ws.mms.shopee.com.br/72fa68aa14b57ee407cc2d66a46710c2">
            <p>Talheres de madeira</p>
            <p>R$: 29.90</p>
        </div>
    </div>

    <div class="produtos">
        <div class="produto">
            <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQRMpDj347gvlA4_SYkVAeHB9VYRJe_Vxzpa7lYPRnNUK6H5sKKHqbj8DmVzHDmOGIbVw0Hi3P4N_tIWNKs21oYcXqwPEjit1w7qnotVR1NOi9cXES57mji7Hy_q7vlnslcMPA&usqp=CAc">
            <p>Copo de bambu</p>
            <p>R$: 29.90</p>
        </div>

        <div class="produto">
            <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ3qnUEG5bHMjOB8eqK_FnqzS8GKhIZe93FcCJ4ZajDXRzrnV7UZwFqhoUSdj1BLuF8Yin1iQ0h1xuznHpvWKrpO3q8Dzjv10_AmaX-q4GLJNuCR7vYq_YKZU8pyj83bTbhhzM&usqp=CAc">
            <p>Esponja ecologica</p>
            <p>R$: 149.99</p>
        </div>

        <div class="produto">
            <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQgd-EsgogBL9iGM2IV8PA_WOfGpRpZ2kqjnkeAIUtD_o2YmeYgiBNUus3jPNZ4mp7wne62hFv9_MtPOdLbesKY1nsC-f7uECKBbUyUj2U6cAtaDLhAV58CWBPrtEUvqiB4iA&usqp=CAc">
            <p>Escova de prato</p>
            <p>R$: 14.99</p>
        </div>

        <div class="produto">
            <img src="https://img.ws.mms.shopee.com.br/72fa68aa14b57ee407cc2d66a46710c2">
            <p>Talheres de madeira</p>
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