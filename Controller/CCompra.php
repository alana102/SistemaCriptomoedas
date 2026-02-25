<?php
include "../Model/MCompra.php";
include_once "../DAO/DCompra.php";
include_once "../DAO/DUsuario.php";

class CCompra
{

    public static function retornarCompra()
    {
        $Compra = DCompra::carregarCompra($_SESSION['id']);
        return $Compra;
    }

    public static function cadastrarCompra($dadosCompra)
    {
        session_start();
        if (!isset($_SESSION['id'])) {
            header("Location: ../View/comprar.php");
            exit();
        }

        $usu_id = $_SESSION['id'];

        $saldo = DUsuario::carregarSaldo($usu_id);

        if ($saldo < floatval($dadosCompra['valor_total'])) {
            $_SESSION['erro'] = "Saldo insuficiente";
            header("Location: ../View/comprar.php");
            exit();
        }

        $Compra = new MCompra(NULL, $usu_id, $dadosCompra['criptomoeda'], $dadosCompra['quantidade'], $dadosCompra['valor_total']);
        $resultado = DCompra::cadastrarCompra($Compra->getCompraIdUsu(), $Compra->getCompraIdCrip(), $Compra->getCompraQntCrip(), $Compra->getCompraValorCrip());

        $valor = floatval($dadosCompra['valor_total']);

        DUsuario::retirarSaldo($usu_id, $valor);

        if ($resultado == true) {
            $_SESSION['sucesso'] = "Compra realizada com sucesso";
            header("Location: ../View/carteira.php");
            exit();
        } 
    }
}
