<?php
include "../Model/MUsuario.php";
include_once "../DAO/DUsuario.php";

class CUsuario
{
    public static function cadastrarUsuario($dadosUsuario)
    {
        $Usuario = new MUsuario(NULL, $dadosUsuario['nome'], $dadosUsuario['logradouro'], $dadosUsuario['numero'], $dadosUsuario['bairro'], $dadosUsuario['cidade'], $dadosUsuario['estado'], $dadosUsuario['cep'], $dadosUsuario['cpf'], $dadosUsuario['email'], $dadosUsuario['senha']);
        $resultado = DUsuario::cadastrarUsuario($Usuario->getNome(), $Usuario->getLogradouro(), $Usuario->getNumero(), $Usuario->getBairro(), $Usuario->getCidade(), $Usuario->getEstado(), $Usuario->getCep(), $Usuario->getCpf(), $Usuario->getEmail(), $Usuario->getSenha());

        if ($resultado === true) {
            $_SESSION['sucesso'] = "Cadastro realizado com sucesso";
            header("Location: ../View/login.php");
            exit();
        } 
    }

    public static function retornarUsuario()
    {
        $Usuario = DUsuario::carregarUsuarioPorId($_SESSION['id']);
        return $Usuario;
    }

    public static function editarUsuario($dadosUsuario)
    {
        $Usuario = new MUsuario(NULL, $dadosUsuario['nome'], $dadosUsuario['logradouro'], $dadosUsuario['numero'], $dadosUsuario['bairro'], $dadosUsuario['cidade'], $dadosUsuario['estado'], $dadosUsuario['cep'], $dadosUsuario['cpf'], $dadosUsuario['email'], null);
        DUsuario::editarUsuario($Usuario->getNome(), $Usuario->getLogradouro(), $Usuario->getNumero(), $Usuario->getBairro(), $Usuario->getCidade(), $Usuario->getEstado(), $Usuario->getCep(), $Usuario->getCpf(), $Usuario->getEmail());
    }

    public static function depositarSaldo()
    {
        session_start();

        if (!isset($_SESSION['id'])) {
            header("Location: ../View/index.php");
            exit();
        }

        $valor = floatval($_POST['saldo']); 

        DUsuario::depositarSaldo($_SESSION['id'], $valor);
    }

    public static function excluirUsuario(){
        session_start();

        if (!isset($_SESSION['id'])) {
            header("Location: ../View/index.php");
            exit();
        }

        DUsuario::excluirUsuario($_SESSION['id']);

    }
}
