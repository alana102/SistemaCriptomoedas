<?php

class MCriptomoeda {

    private $crip_id;
    private $crip_nome;
    private $crip_empresa;
    private $crip_descricao;
    private $crip_foto;
    private $crip_valor;

    public function __construct($crip_id, $crip_nome, $crip_empresa, $crip_descricao, $crip_foto, $crip_valor) {
        $this->crip_id = $crip_id;
        $this->crip_nome = $crip_nome;
        $this->crip_empresa = $crip_empresa;
        $this->crip_descricao = $crip_descricao;
        $this->crip_foto = $crip_foto;
        $this->crip_valor = $crip_valor;
    }

    // GETTERS
    public function getCripId() {
        return $this->crip_id;
    }

    public function getCripNome() {
        return $this->crip_nome;
    }

    public function getCripEmpresa() {
        return $this->crip_empresa;
    }

    public function getCripDescricao() {
        return $this->crip_descricao;
    }

    public function getCripFoto() {
        return $this->crip_foto;
    }

    public function getCripValor() {
        return $this->crip_valor;
    }

    // SETTERS
    public function setCripId($crip_id) {
        $this->crip_id = $crip_id;
    }

    public function setCripNome($crip_nome) {
        $this->crip_nome = $crip_nome;
    }

    public function setCripEmpresa($crip_empresa) {
        $this->crip_empresa = $crip_empresa;
    }

    public function setCripDescricao($crip_descricao) {
        $this->crip_descricao = $crip_descricao;
    }

    public function setCripFoto($crip_foto) {
        $this->crip_foto = $crip_foto;
    }

    public function setCripValor($crip_valor) {
        $this->crip_valor = $crip_valor;
    }

}

?>