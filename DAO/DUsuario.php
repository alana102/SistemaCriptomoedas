<?php

class DUsuario
{

    public static function cadastrarUsuario(
        $usu_nome,
        $usu_logradouro,
        $usu_numero,
        $usu_bairro,
        $usu_cidade,
        $usu_estado,
        $usu_cep,
        $usu_cpf,
        $usu_email,
        $usu_senha
    ) {
        require_once "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "INSERT INTO tab_usuario(usu_id, usu_nome, usu_logradouro, usu_numero, usu_bairro, usu_cidade, usu_estado, usu_cep, usu_cpf, usu_email, usu_senha, usu_saldo) 
        VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0);";

        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array(
                $usu_nome,
                $usu_logradouro,
                $usu_numero,
                $usu_bairro,
                $usu_cidade,
                $usu_estado,
                $usu_cep,
                $usu_cpf,
                $usu_email,
                $usu_senha
            ));
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Usuário cadastrado com sucesso')
            window.location.href='../View/login.php';
            </SCRIPT>");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function carregarUsuarioPorId($id)
    {
        require_once "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "SELECT usu_id, usu_nome, usu_email, usu_saldo,
                   usu_logradouro, usu_numero, usu_bairro,
                   usu_cidade, usu_estado, usu_cep, usu_cpf
            FROM tab_usuario
            WHERE usu_id = :id";

        try {
            $stmt = $conexaoBD->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch();
        } catch (Exception $ex) {
            echo $ex;
            return null;
        }
    }



    public static function excluirUsuario($codigo)
    {
        require_once "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "DELETE FROM tab_usuario where usu_id=?";

        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($codigo));
            header("location: ../View/login.php");
        } catch (Exception $ex) {

            echo $ex;

            return 0;
        }
    }

    public static function editarUsuario(
        $usu_nome,
        $usu_logradouro,
        $usu_numero,
        $usu_bairro,
        $usu_cidade,
        $usu_estado,
        $usu_cep,
        $usu_cpf,
        $usu_email
    ) {

        require_once "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "UPDATE tab_usuario SET usu_nome=?, usu_logradouro=?, usu_numero=?, usu_bairro=?, usu_cidade=?, usu_estado=?, usu_cep=?, usu_cpf=?, usu_email=?;";

        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array(
                $usu_nome,
                $usu_logradouro,
                $usu_numero,
                $usu_bairro,
                $usu_cidade,
                $usu_estado,
                $usu_cep,
                $usu_cpf,
                $usu_email
            ));
            header("location: ../View/perfil.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
}
