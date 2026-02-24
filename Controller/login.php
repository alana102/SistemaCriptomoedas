<?php
session_start();

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: ../View/index.php');
	exit();
}

$conexao = mysqli_connect('localhost', 'root', '', 'criptomoeda') or die ('Não foi possível conectar');

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usu_email from tab_usuario where usu_email = '{$email}' and usu_senha = '{$senha}'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: ../View/index.php');
	exit();
} else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../View/index.php');
	exit();
} 
?>

