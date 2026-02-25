<?php

class DCompra
{

    public static function carregarCompra($usu_id)
    {
        require_once "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "SELECT c.compra_id, u.usu_nome, cr.crip_nome, c.compra_qnt_crip, c.compra_valor_crip 
        FROM tab_compra c 
        JOIN tab_usuario u ON c.compra_id_usu = u.usu_id 
        JOIN tab_criptomoeda cr ON c.compra_id_crip = cr.crip_id WHERE c.compra_id_usu = :id;";

        try {
            $stmt = $conexaoBD->prepare($sql);
            $stmt->bindValue(':id', $usu_id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $ex) {
            echo $ex;
            return null;
        }
    }

    public static function cadastrarCompra($usu_id, $crip_id, $qnt_crip, $valor_total)
    {
        require_once "conexao.php";
        $conexaoBD = Conexao::criarInstancia();

        $sql = "INSERT INTO tab_compra(compra_id, compra_id_usu, compra_id_crip, compra_qnt_crip, compra_valor_crip)
        VALUES (NULL, ?, ?, ?, ?)";

        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array(
                $usu_id,
                $crip_id,
                $qnt_crip,
                $valor_total
            ));
            return true;
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
}
