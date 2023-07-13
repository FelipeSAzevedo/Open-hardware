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
$conexao = mysqli_connect("localhost", "root", "", "login1");

if ($conexao) {

  $var = $_SESSION['id_usuario'];

  $consulta = 
  "SELECT usuarios.id_usuario, carrinho.id_carrinho, carrinho.id_usuario, carrinho.id_produto,carrinho.nome, carrinho.preco, carrinho.quantidade, carrinho.subtotal 

  FROM carrinho, usuarios 
  
  WHERE carrinho.id_usuario = usuarios.id_usuario and usuarios.id_usuario = '$var'";

  // Executa a consulta SQL
  $resultado = mysqli_query($conexao, $consulta);
?>
<body>
  <div class="container mt-5">
    <h1>Carrinho</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Subtotal</th>
          <th>Quantidade</th>
        </tr>
      </thead>
      <tbody>
        <?php
        
      while ($especialidade = mysqli_fetch_assoc($resultado)) {
      ?>
        <tr>

          <td><?php echo $especialidade['nome']; ?></td>
          <td> R$ <?php echo $especialidade['subtotal']; ?></td>
          <td><?php echo $especialidade['quantidade']; ?></td>
          <td>
            <a href="carrinho_alterar.php?
            id_carrinho=<?php echo $especialidade['id_carrinho']; ?>&
            tipo=1&
            id_produto=<?php echo $especialidade['id_produto']; ?>"
            class="btn btn-primary">-</a>

            <a href="carrinho_alterar.php?
            id_carrinho=<?php echo $especialidade['id_carrinho']; ?>&
            tipo=2&
            id_produto=<?php echo $especialidade['id_produto']; ?>" 
            class="btn btn-primary">+</a>
          </td>

          <td>
            <a href="carrinho_excluir.php?id_carrinho=<?php echo $especialidade['id_carrinho']; ?>&id_produto=<?php echo$especialidade['id_produto']; ?>" class="btn btn-danger">Excluir</a>
          </td>
        </tr>
      <?php
      }
      ?>
      </tbody>
    </table>
  </div>

</body>
</html>
<?php
  // Fecha a conexão com a base de dados
  mysqli_close($conexao);
} else {
  echo "Falha na conexão com a base de dados: " . mysqli_connect_error();
}
?>
  </body>
</html>
