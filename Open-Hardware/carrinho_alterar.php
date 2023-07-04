<?php
// Verifica se o parâmetro "id" foi passado na URL
if (isset($_GET['id'])) {
    if (isset($_GET['tipo'])) {
    // Obtém o valor do parâmetro "id"
    $id = $_GET['id'];
    $tipo =  $_GET['tipo'];

    // Conexão com a base de dados
    $conexao = mysqli_connect("localhost", "root", "", "login");

    // Verifica se a conexão foi estabelecida com sucesso
    if ($conexao) {
      // Consulta SQL para selecionar a especialidade médica com base no "id"
      $consulta = "SELECT * FROM especialidades WHERE id = '$id'";

      // Executa a consulta SQL
      $resultado = mysqli_query($conexao, $consulta);

      // Verifica se a consulta retornou alguma linha
      if (mysqli_num_rows($resultado) > 0) {
        // Obtém os dados da especialidade médica
        $especialidade = mysqli_fetch_assoc($resultado);


        // Obtém os dados enviados pelo formulário
          $quantidade = $_POST["quantidade"];

          if($tipo == 1){
          
            $atualizar = "UPDATE especialidades SET quantidade = quantidade -1, descricao = '$descricao' WHERE id = '$id'";
            $resultado_atualizar = mysqli_query($conexao, $atualizar);
          }else{
            $atualizar = "UPDATE especialidades SET quantidade = quantidade +1, descricao = '$descricao' WHERE id = '$id'";
            $resultado_atualizar = mysqli_query($conexao, $atualizar);
          }

          if ($resultado_atualizar) {
            echo "Especialidade médica atualizada com sucesso!";
            // Redireciona para a página de listagem de especialidades após 3 segundos
            header("Location: carrinho.php");
          } else {
            echo "Ocorreu um erro ao atualizar a especialidade médica: " . mysqli_error($conexao);
          }
        
      } else {
        echo "Especialidade médica não encontrada.";
      }

      // Fecha a conexão com a base de dados
      mysqli_close($conexao);
    } else {
      echo "Falha na conexão com a base de dados: " . mysqli_connect_error();
    }
  }
} else {
  echo "ID da especialidade médica não fornecido.";
}
?>
