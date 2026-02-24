<?php

include_once "CUsuario.php";

if(filter_input(INPUT_GET, "acao")=="cadastrar" & filter_input(INPUT_GET, "tipo")=="usuario") {
    CUsuario::cadastrarUsuario($_POST);
}

if(filter_input(INPUT_GET, "acao")=="editar" & filter_input(INPUT_GET, "tipo")=="usuario") {
    CUsuario::editarUsuario($_POST);
}

?>