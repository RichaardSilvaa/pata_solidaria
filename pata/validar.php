<?php

session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cadastro";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao) {
    die("Houve um erro: ".mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0)  {
        $_SESSION['login_success'] = true;
        header("Location: index.html");
    } else {
        $_SESSION['login_error'] = true;
        echo "Usuário ou senha inválidos.";
    }
    
}

mysqli_close($conexao);
?>