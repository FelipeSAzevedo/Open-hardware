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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

  <p class="painel">Bem vindo ao seu carrinho, <?php echo $_SESSION['nome']; ?>.</p>

<?php
// Conexão com a base de dados
$conexao = mysqli_connect("localhost", "root", "", "login");


if ($conexao) {
  
  $consulta = "SELECT * FROM especialidades, usuarios WHERE especialidades.id_carrinho = usuarios.id_usuario";

  // Executa a consulta SQL
  $resultado = mysqli_query($conexao, $consulta);
?>
<body>
  <header
>    <!-- Cabeçalho da página -->
    <nav class="navbar navbar-expand-llg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Hospital Mesquita dos Trabalhadores</a>
      </div>
    </nav>
  </header>
  <div class="container mt-5">
    <h1>Lista de Especialidades Médicas</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Subtotal</th>
          <th>Quantidade</th>
          <th>Nome</th>
          <th>Descricao</th>
        </tr>
      </thead>
      <tbody>
        <?php
      // Loop para exibir as especialidades médicas
      while ($especialidade = mysqli_fetch_assoc($resultado)) {
      ?>
        <tr>
          <td> R$ <?php echo $especialidade['subtotal']; ?></td>
          <td><?php echo $especialidade['quantidade']; ?></td>
          <td><?php echo $especialidade['nome']; ?></td>
          <td><?php echo $especialidade['descricao']; ?></td>
          <td>
            <a href="carrinho_alterar.php?id_produto=<?php echo $especialidade['id_produto']; ?>&tipo=1" class="btn btn-primary">-</a>

            <a href="carrinho_alterar.php?id_produto=<?php echo $especialidade['id_produto']; ?>&tipo=2" class="btn btn-primary">+</a>
          </td>

          <td>
            <a href="carrinho_excluir.php?id_produto=<?php echo $especialidade['id_produto']; ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta especialidade?') " >Excluir</a>
          </td>
        </tr>
      <?php
      }
      ?>
      </tbody>
    </table>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
  // Fecha a conexão com a base de dados
  mysqli_close($conexao);
} else {
  echo "Falha na conexão com a base de dados: " . mysqli_connect_error();
}
?>













  

    <footer class="rodape">
        <a href="readme.php" class="footer_link">
            <p>Sobre a página</p>
        </a>
    </footer>
  </body>
</html>
