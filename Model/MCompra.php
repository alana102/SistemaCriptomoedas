<?php 

class MCompra {

    private $compra_id;
    private $compra_id_usu;
    private $compra_id_crip;
    private $compra_qnt_crip;
    private $compra_valor_crip;

    public function __construct($compra_id, $compra_id_usu, $compra_id_crip, $compra_qnt_crip, $compra_valor_crip)
    {
        $this->compra_id = $compra_id;
        $this->compra_id_usu = $compra_id_usu;
        $this->compra_id_crip = $compra_id_crip;
        $this->compra_qnt_crip = $compra_qnt_crip;
        $this->compra_valor_crip = $compra_valor_crip;
    }

    // Getters
    public function getCompraId() {
        return $this->compra_id;
    }

    public function getCompraIdUsu() {
        return $this->compra_id_usu;
    }

    public function getCompraIdCrip() {
        return $this->compra_id_crip;
    }

    public function getCompraQntCrip() {
        return $this->compra_qnt_crip;
    }

    public function getCompraValorCrip() {
        return $this->compra_valor_crip;
    }

    // Setters
    public function setCompraId($compra_id) {
        $this->compra_id = $compra_id;
    }

    public function setCompraIdUsu($compra_id_usu) {
        $this->compra_id_usu = $compra_id_usu;
    }

    public function setCompraIdCrip($compra_id_crip) {
        $this->compra_id_crip = $compra_id_crip;
    }

    public function setCompraQntCrip($compra_qnt_crip) {
        $this->compra_qnt_crip = $compra_qnt_crip;
    }

    public function setCompraValorCrip($compra_valor_crip) {
        $this->compra_valor_crip = $compra_valor_crip;
    }
}

?>
