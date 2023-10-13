<?php

namespace Arch\Testing\Database;

use PDO;

class Connection
{
    static $conexao;
    private function __construct()
    {
    }

    static function conectar()
    {
        if (self::$conexao === null) {
            try {
                self::$conexao = new PDO(
                    $_ENV['DB_CONNECTION'] .
                    ':host=' . $_ENV['DB_HOST'] .
                    ';dbname=' . $_ENV['DB_DATABASE'],
                    $_ENV['DB_USERNAME'],
                    $_ENV['DB_PASSWORD']
                );
            } catch (\Throwable $th) {
                echo "Ops.... houve um problema nos nossos servidores! Mensagem: " . $th->getMessage();
            }
        }
        return self::$conexao;
    }
}