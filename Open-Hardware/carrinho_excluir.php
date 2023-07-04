<?php
// Verifica se o ID da especialidade a ser excluída foi fornecido
if(isset($_GET['id'])) {
    $id = $_GET['id'];
  
    // Conexão com a base de dados
    $conexao = mysqli_connect("localhost", "root", "", "login");

    // Verifica se a conexão foi estabelecida com sucesso
    if ($conexao) {
        // Consulta SQL para excluir a especialidade médica com o ID fornecido
        $consulta = "DELETE FROM especialidades WHERE id = '$id'";

        // Executa a consulta SQL
        $resultado = mysqli_query($conexao, $consulta);

        if ($resultado) {
            // Exclusão bem-sucedida, redireciona de volta à página de listagem de especialidades
            header("Location: carrinho.php");
            exit();
        } else {
            // Lidar com erros, se houver
            echo "Erro ao excluir: " . mysqli_error($conexao);
        }

        // Fecha a conexão com a base de dados
        mysqli_close($conexao);
    } else {
        echo "Falha na conexão com a base de dados: " . mysqli_connect_error();
    }
}
?>
