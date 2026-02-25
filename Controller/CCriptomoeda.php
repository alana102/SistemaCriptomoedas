<?php
include "../Model/MCriptomoeda.php";
include_once "../DAO/DCriptomoeda.php";

class CCriptomoeda {

public static function retornarCriptomoeda()
    {
        $Criptomoeda = DCriptomoeda::carregarCriptomoedas();
        return $Criptomoeda;
    }

}

?>