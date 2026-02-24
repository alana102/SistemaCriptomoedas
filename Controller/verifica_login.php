<?php

//Inicia a session
session_start();

//Verifica se não existe a variável de login
if(!isset($_SESSION['id'])) {

	//Caso não exista, redireciona para a página de login do admin novamente
	header('Location: ../View/login.php');
	exit();
}

?>