
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
    <p class="painel">Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>.</p>

    <p>
        <a class="painel" href="logout.php">Sair</a>
    </p>
</body>
</html>