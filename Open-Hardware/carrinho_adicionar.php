<?php

include('protect.php');

if(isset($_GET['id_produto'])) {
    $idproduto = $_GET['id_produto'];
    $nome = $_GET['nome'];
    $preco = $_GET['preco'];
    $idusuario = $_SESSION['id_usuario'];
  
    $conexao = mysqli_connect("localhost", "root", "", "login1");

        $sql_code = "SELECT carrinho.id_produto, carrinho.id_usuario FROM carrinho WHERE id_produto = '$idproduto' AND id_usuario = '$idusuario'";

        //$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_code->num_rows;

        if($quantidade == 1) {

    if ($conexao) {
        $consulta = "INSERT INTO carrinho (id_usuario, id_produto, nome, preco, quantidade, subtotal) VALUES ('$idusuario', '$idproduto', '$nome', '$preco', 1, '$preco')";

        $resultado = mysqli_query($conexao, $consulta);
        header("Location: carrinho.php");
    }
}
}

?>