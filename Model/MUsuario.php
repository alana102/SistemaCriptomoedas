<?php

class MUsuario {

    private $usu_id;
    private $usu_nome;
    private $usu_logradouro;
    private $usu_numero;
    private $usu_bairro;
    private $usu_cidade;
    private $usu_estado;
    private $usu_cep;
    private $usu_cpf;
    private $usu_email;
    private $usu_senha;
    private $usu_saldo;

    public function __construct($usu_id, $usu_nome, $usu_logradouro, $usu_numero, 
                                $usu_bairro, $usu_cidade , $usu_estado , $usu_cep , 
                                $usu_cpf , $usu_email , $usu_senha )
    {
        $this->usu_id = $usu_id;
        $this->usu_nome = $usu_nome;
        $this->usu_logradouro = $usu_logradouro;
        $this->usu_numero = $usu_numero;
        $this->usu_bairro = $usu_bairro;
        $this->usu_cidade = $usu_cidade;
        $this->usu_estado = $usu_estado;
        $this->usu_cep = $usu_cep;
        $this->usu_cpf = $usu_cpf;
        $this->usu_email = $usu_email;
        $this->usu_senha = $usu_senha;
      
    }

    // Getters
    public function getId() { return $this->usu_id; }
    public function getNome() { return $this->usu_nome; }
    public function getLogradouro() { return $this->usu_logradouro; }
    public function getNumero() { return $this->usu_numero; }
    public function getBairro() { return $this->usu_bairro; }
    public function getCidade() { return $this->usu_cidade; }
    public function getEstado() { return $this->usu_estado; }
    public function getCep() { return $this->usu_cep; }
    public function getCpf() { return $this->usu_cpf; }
    public function getEmail() { return $this->usu_email; }
    public function getSenha() { return $this->usu_senha; }
    public function getSaldo() { return $this->usu_saldo; }

    // Setters
    public function setId($usu_id) { $this->usu_id = $usu_id; }
    public function setNome($usu_nome) { $this->usu_nome = $usu_nome; }
    public function setLogradouro($usu_logradouro) { $this->usu_logradouro = $usu_logradouro; }
    public function setNumero($usu_numero) { $this->usu_numero = $usu_numero; }
    public function setBairro($usu_bairro) { $this->usu_bairro = $usu_bairro; }
    public function setCidade($usu_cidade) { $this->usu_cidade = $usu_cidade; }
    public function setEstado($usu_estado) { $this->usu_estado = $usu_estado; }
    public function setCep($usu_cep) { $this->usu_cep = $usu_cep; }
    public function setCpf($usu_cpf) { $this->usu_cpf = $usu_cpf; }
    public function setEmail($usu_email) { $this->usu_email = $usu_email; }
    public function setSenha($usu_senha) { $this->usu_senha = $usu_senha; }
    public function setSaldo($usu_saldo) { $this->usu_saldo = $usu_saldo; }

}

?>