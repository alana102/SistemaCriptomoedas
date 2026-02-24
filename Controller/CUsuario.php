<?php
include "../Model/MUsuario.php";
include_once "../DAO/DUsuario.php";

class CUsuario {
    public static function cadastrarUsuario($dadosUsuario){
        $Usuario = new MUsuario(NULL, $dadosUsuario['nome'], $dadosUsuario['logradouro'], $dadosUsuario['numero'], $dadosUsuario['bairro'], $dadosUsuario['cidade'], $dadosUsuario['estado'], $dadosUsuario['cep'], $dadosUsuario['cpf'], $dadosUsuario['email'], $dadosUsuario['senha']);
        DUsuario::cadastrarUsuario( $Usuario->getNome(), $Usuario->getLogradouro(), $Usuario->getNumero(), $Usuario->getBairro(), $Usuario->getCidade(), $Usuario->getEstado(), $Usuario->getCep(), $Usuario->getCpf(), $Usuario->getEmail(), $Usuario->getSenha());
    }

    public static function retornarUsuario(){
        $Usuario = DUsuario::carregarUsuarioPorId($_SESSION['id']);
        return $Usuario;
    }

    public static function editarUsuario($dadosUsuario) {
        $Usuario = new MUsuario(NULL, $dadosUsuario['nome'], $dadosUsuario['logradouro'], $dadosUsuario['numero'], $dadosUsuario['bairro'], $dadosUsuario['cidade'], $dadosUsuario['estado'], $dadosUsuario['cep'], $dadosUsuario['cpf'], $dadosUsuario['email'], null);
        DUsuario::editarUsuario( $Usuario->getNome(), $Usuario->getLogradouro(), $Usuario->getNumero(), $Usuario->getBairro(), $Usuario->getCidade(), $Usuario->getEstado(), $Usuario->getCep(), $Usuario->getCpf(), $Usuario->getEmail());
        
    }
}

?>