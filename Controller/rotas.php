<?php

include_once "CUsuario.php";
include_once "CCompra.php";
include_once "CCriptomoeda.php";

//Ações usuário

if(filter_input(INPUT_GET, "acao")=="cadastrar" & filter_input(INPUT_GET, "tipo")=="usuario") {
    CUsuario::cadastrarUsuario($_POST);
}

if(filter_input(INPUT_GET, "acao")=="editar" & filter_input(INPUT_GET, "tipo")=="usuario") {
    CUsuario::editarUsuario($_POST);
}

if(filter_input(INPUT_GET, "acao")=="depositar") {
    CUsuario::depositarSaldo($_POST);
}

if(filter_input(INPUT_GET, "acao")=="excluir" & filter_input(INPUT_GET, "tipo")=="usuario"){
    CUsuario::excluirUsuario($_POST);
}

//Ações criptomoedas

if(filter_input(INPUT_GET, "acao")=="cadastrar" & filter_input(INPUT_GET, "tipo")=="criptomoeda") {
    CCriptomoeda::cadastrarCriptomoeda($_POST);
}

//Ações compras

if(filter_input(INPUT_GET, "acao")=="comprarcrip"){

    CCompra::cadastrarCompra($_POST);
}

?>