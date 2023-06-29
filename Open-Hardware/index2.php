<?php
include('conexao.php');

$aviso = "";

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else if(strlen($_POST['nome']) == 0) {
        echo "Preencha seu nome";
    }else if(strlen($_POST['cpf']) == 0) {
        echo "Preencha seu cpf";
    }else{

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $cpf = $mysqli->real_escape_string($_POST['cpf']);

        ///////////////////////////////////////////////////////////////////////////////////////
                                 //verifica se o email ja esta sendo usado//
        ///////////////////////////////////////////////////////////////////////////////////////
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        
        if($quantidade == 1) {
            $aviso = "Email invalido ou em uso";
        }
        else{

        
            $sql_code = "INSERT INTO usuarios (email, senha, nome, cpf) VALUES ('$email', '$senha', '$nome', '$cpf')"; 
            //injetando no banco de dados com sucesso

            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {
                
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: profile.php");

            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Open Hardware</title>
    <link rel="icon" href="./images/Ohw-logo.svg-mini.png" />
    <link rel="stylesheet" href="style.css" />
    <script async src="./script.js"></script>
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
        <p>Produtos periféricos</p>
      </a>

      <a href="hardware.php" class="cabecalho_link">
        <p>Hardware</p>
      </a>

    
    </div>
  </header>

    <div class="login">
        <h1>Crie sua conta</h1>
        <form action="" method="POST">
            <p>
                <label>E-mail</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha">
            </p>
            <p>
                <label>Nome</label>
                <input type="text" name="nome">
            </p>
            <p>
                <label>Cpf  </label>
                <input type="text" name="cpf">
            </p>
            <p>
                <button type="submit">Criar</button>
            </p>
        </form>

        <a href="index.php">Possue uma conta? Entre</a>

        <h1> <?php echo $aviso; ?> </h1>
    </div>
</body>
</html>