<?php

include('protect.php');

if (isset($_GET['id_carrinho'])) {
    if (isset($_GET['tipo'])) {
    $id = $_GET['id_carrinho'];
    $idproduto = $_GET['id_produto'];
    $tipo =  $_GET['tipo'];

    $conexao = mysqli_connect("localhost", "root", "", "login1");

    if ($conexao) {
      $consulta = "SELECT * FROM carrinho WHERE id_carrinho = '$id'";
      $resultado = mysqli_query($conexao, $consulta);

      if (mysqli_num_rows($resultado) > 0) {
        $especialidade = mysqli_fetch_assoc($resultado);

          if($tipo == 1){

            //verifica se o valor for 1, entao nao diminui
            $sql = "SELECT quantidade FROM carrinho WHERE id_carrinho = '$id' and id_produto ='$idproduto'";
            $result = $conexao->query($sql);

            $row = $result->fetch_assoc();
            $nome = $row["quantidade"];

            if($nome != 1){
              $atualizar = "UPDATE carrinho SET quantidade = quantidade -1, subtotal = quantidade * preco WHERE id_carrinho = '$id' and id_produto ='$idproduto'";
              $resultado_atualizar = mysqli_query($conexao, $atualizar);
            }else{
              $resultado_atualizar ='';
            }
          }
          if($tipo == 2){
            $atualizar = "UPDATE carrinho SET quantidade = quantidade +1, subtotal = quantidade * preco WHERE id_carrinho = '$id' and id_produto ='$idproduto'";
            $resultado_atualizar = mysqli_query($conexao, $atualizar);
          }

          if ($resultado_atualizar) {
            header("Location: carrinho.php");
          } else {
            header("Location: carrinho_excluir.php?id_carrinho=$id&id_produto=$idproduto");
          }
      }
      mysqli_close($conexao);
    } else {
      echo "Falha na conexão com a base de dados: " . mysqli_connect_error();
    }
  }
}
?>