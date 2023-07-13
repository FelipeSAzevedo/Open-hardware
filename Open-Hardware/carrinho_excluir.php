<?php

include('protect.php');

if(isset($_GET['id_carrinho'])) {
    $id = $_GET['id_carrinho'];
    $idproduto = $_GET['id_produto'];
    
    $conexao = mysqli_connect("localhost", "root", "", "login1");

    if ($conexao) {
        $consulta = "DELETE FROM carrinho WHERE id_carrinho = '$id' and id_produto ='$idproduto'";

        $resultado = mysqli_query($conexao, $consulta);

        if ($resultado) {
            header("Location: carrinho.php");
            exit();
        } else {
            echo "Erro ao excluir: " . mysqli_error($conexao);
        }
        mysqli_close($conexao);
    } else {
        echo "Falha na conexão com a base de dados: " . mysqli_connect_error();
    }
}
?>
