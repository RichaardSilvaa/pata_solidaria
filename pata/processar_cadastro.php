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

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$datanasc = $_POST['datanasc'];
$senha = $_POST['senha'];
$adotar = $_POST['adotar'];
$anunciar = $_POST['anunciar'];

$sql = "INSERT INTO usuarios (nome, cpf, email, tel, datanasc, senha, adotar, anunciar) VALUES ('$nome', '$cpf', '$email', '$tel', '$datanasc', '$senha', '$adotar', '$anunciar')";
$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    $_SESSION['cadastro_success'] = true;
    header("Location: login.php");
} else {
    $_SESSION['cadastro_error'] = true;
    header("Location: cadastro.php");
}

mysqli_close($conexao);
?>