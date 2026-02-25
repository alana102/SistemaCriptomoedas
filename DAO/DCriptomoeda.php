<?php

class DCriptomoeda{

    public static function carregarCriptomoedas()
    {
        require_once "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "SELECT crip_id, crip_nome, crip_empresa, crip_descricao, crip_foto, crip_valor
            FROM tab_criptomoeda";

        try {
            $stmt = $conexaoBD->query($sql);
            return $stmt->fetchAll();
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function cadastrarCriptomoeda($crip_nome, $crip_empresa, $crip_descricao, $crip_foto, $crip_valor){
        require_once "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "INSERT INTO tab_criptomoeda(crip_id, crip_nome, crip_empresa, crip_descricao, crip_foto, crip_valor) 
        VALUES (NULL, ?, ?, ?, ?, ?);";

        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array(
                $crip_nome, $crip_empresa, $crip_descricao, $crip_foto, $crip_valor
            ));
            return true;
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }


    }

}



?>