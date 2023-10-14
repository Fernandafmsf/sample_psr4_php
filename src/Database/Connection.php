<?php

namespace Fernanda\SamplePsr4Php\Database;

use PDO;
use PDOException;


class Connection
{
    const HOST = 'localhost:3306';
    const DB = 'teste2';
    const USER = 'admin';
    const PASSWORD = 'admin';
    const table = "teste";

    static $conexao;

    public function __construct()
    {
    }

    static function getConnection()
    {
        if (self::$conexao === null) {
            try {
                self::$conexao = new PDO("mysql:host=" . self::HOST . "; dbname=" . self::DB, self::USER, self::PASSWORD);
            } catch (PDOException $e) {
                throw new PDOException($e);
            }
        }
        return self::$conexao;
    }
}
