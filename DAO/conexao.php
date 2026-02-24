<?php

class Conexao {
    private static $instancia = null;

    public static function criarInstancia(){
        if (!isset(self::$instancia)) {

            $optionsPDO = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];

            self::$instancia = new PDO(
                'mysql:host=localhost;dbname=criptomoeda;charset=utf8',
                'root',
                '',
                $optionsPDO
            );
        }

        return self::$instancia;
    }
}

?>