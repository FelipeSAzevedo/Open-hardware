<?php

include('protect.php');

if(isset($_GET['id_produto'])) {
    $idproduto = $_GET['id_produto'];
    $nome = $_GET['nome'];
    $preco = $_GET['preco'];
    $idusuario = $_SESSION['id_usuario'];

    $conexao = mysqli_connect("localhost", "root", "", "login1");

    $sql = "SELECT id_produto FROM carrinho WHERE id_usuario = '$idusuario' and id_produto ='$idproduto'";
    $result = $conexao->query($sql);
        
    if ($result->num_rows < 1) {
        
    if ($conexao) {
        
        $consulta = "INSERT INTO carrinho (id_usuario, id_produto, nome, preco, quantidade, subtotal) VALUES ('$idusuario', '$idproduto', '$nome', '$preco', 1, '$preco')";

        $resultado = mysqli_query($conexao, $consulta);
        header("Location: carrinho.php");
    }
    }else{
        header("Location: carrinho.php");
    }
}

?>