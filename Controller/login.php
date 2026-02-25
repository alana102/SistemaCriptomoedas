<?php
include "../DAO/conexao.php";
session_start();

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: ../View/index.php');
    exit();
}

$conexao = Conexao::criarInstancia();

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT usu_id, usu_email, usu_senha FROM tab_usuario WHERE usu_email = :email";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();

$usuario = $stmt->fetch();

if($usuario) {

    if($senha === $usuario['usu_senha']) {
        $_SESSION['id'] = $usuario['usu_id'];
        $_SESSION['email'] = $email;
        header('Location: ../View/index.php');
        exit();
    }
}

$_SESSION['erro'] = "Usuário ou senha inválidos. Tente novamente!";
header('Location: ../View/index.php');
exit();
?>