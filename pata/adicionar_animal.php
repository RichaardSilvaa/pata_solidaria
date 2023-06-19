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

$nome = $_POST['nomeA'];
$especie = $_POST['especieA'];
$idade = $_POST['idadeA'];
$porte = $_POST['porteA'];
$sexo = $_POST['sexoA'];

$sql = "INSERT INTO animais (nome, especie, idade, porte, sexo) VALUES ('$nome', '$especie', '$idade', '$porte', '$sexo')";
$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    $_SESSION['cadastro_success'] = true;
    echo "Animal cadastrado com sucesso.";
} else {
    $_SESSION['cadastro_error'] = true;
    header("Location: adicionar_animal.php");
}

mysqli_close($conexao);
?>